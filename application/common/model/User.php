<?php
/**
 * Created by code
 * User: Administrator
 * Date: 2019/11/22
 * Time: 9:56
 */

 namespace app\common\model;

 use think\captcha\Captcha;
 use think\Session;
 use think\Model;

 class User extends model{

    public static function init(){
        self::event('before_insert',function($user){
            //密码加密
            $user['user_password']=md5(config('admin_base.md5_prefix').$user['user_password']);
            
        });
    }
    public function addData(){

        $dt=input('post.');
        //邮箱验证码验证
        $user_yzm=session('user_yzm');
        if ($dt['ca_code']!=$user_yzm) {
            return '验证码错误';
        }
        session('user_yam',null);
        //当前时间戳赋值创建时间
        $dt['create_time']=time();
        //判断用户名是否已经被注册
        $user_name=$dt['user_name'];
        $data=model('User')
        ->where('user_name','=',$user_name)->find();
        if($data){
            return '用户名已经存在！';
        }
        //更新数据库
        $res=$this->allowField(true)->save($dt);

        if(!$res){
            return '注册失败';
        }

        return true;
    }


    public function send_email($to){
        $user_yzm=mt_rand(1000,9999);  //随机4位验证码
        $title='周庄旅游官方网站';    //发件标题
        //邮件内容
        $content = <<<email
            <p>欢迎注册周庄旅游官方网站!</p>
            <p>您的验证码是：{$user_yzm}</p>
email;
        //执行发送
        sendMail($to,$title,$content);
        session('user_yzm',$user_yzm);//把验证码放入session里，后面用于验证
        
        return true;
    }


    public function login(){
        $dt=input('post.');

        $capt=new Captcha();
        if(!$capt->check($dt['ca_code'])){
            return '验证码错误';
        }

        $res = $this->where('user_name','=',$dt['user_name'])->find();

        if($res){
            if($res['user_password']==md5(config('admin_base.md5_prefix').$dt['user_password'])){
                if($res['status']==1){
                    session('user_name',$dt['user_name']);
                    session('user_id',$res['id']);
                    return true;
                }
                return '账号已禁用，请联系管理员！';
            }
            return '密码错误！';
        }
        return '用户名不存在！';
    }


    public function sel(){

        $where=[];

        //获取当前提交的时间数据
        $s_time=input('param.start_time');
        $e_time=input('param.end_time');

        //将 对应的字符串截取10位，即年月日
        $_start_time=substr($s_time,0,10);
        $_end_time=substr($e_time,0,10);

        //将时间转换成时间戳
        $start_time=strtotime($_start_time);
        $end_time=strtotime($_end_time);

        if(!empty($s_time) && !empty($e_time)){
            //若填写了开始时间和结束时间，将时间用between对where变量进行赋值
            $where['create_time']=['between',[$start_time,$end_time]];
            
        }else if(!empty($s_time)){
            //若填写了开始时间，而没有填写结束时间，则只将开始时间写入where
            $where['create_time']=['>=',$start_time];
        
        }else if(!empty($e_time)){
            //若填写了结束时间，而没有填写开始时间，则只将结束时间写入where
            $where['create_time']=['<=',$end_time];
        }

        /**************管理员名称*******************/

        $user_name=input('param.user_name');
        if(!empty($user_name)){
            $where['user_name'] = ['=',$user_name];
        }

        $data=$this->where($where)->select();

        return $data;

    }

 }