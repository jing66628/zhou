<?php 

/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 15:51
 */

namespace app\admin\Controller;

use think\captcha\Captcha;
use think\Controller;

class Login extends Controller{

    public function login(){
        if(request()->isPost()){
            $admin_name=input('post.admin_name');
            $admin_pass=input('post.admin_pass');
            $admin_cap=input('post.admin_cap');

            if(empty($admin_name)){
                $this->error('用户名不能为空！');
            }
            if(empty($admin_pass)){
                $this->error('密码不能为空！');
            }
            if(empty($admin_cap)){
                $this->error('验证码不能为空！');
            }

            //检查验证码
            $captcha=new Captcha();
            if(!$captcha->check($admin_cap)){
                $this->error('验证码错误！');
            }

            //判断用户名
            $data=model('Admin')->where('admin_name','=',$admin_name)->where('status','=','1')->find();
            if (!empty($data)) {
                if($data['admin_pass'] == md5(config('admin_base.md5_prefix').$admin_pass)){

                    //添加登录时间和登录ip
                    $dt['login_time']= time();
                    $dt['login_ip']= request()->ip();

                    //将登陆时间和ip放入数据库    isAutoWriteTimestamp(false) 更新的时候不自动更新update_time 字段
                    $res=db('admin')->where('admin_name','=',$admin_name)->update($dt);

                    session('admin_name',$admin_name);
                    session('admin_id',$data['id']);

                    $this->success('登录成功','User/lst');
                }
                $this->error('密码错误！');
            }
            $this->error('用户名不存在或被禁用！');
        }
        return view('');
    }

    //退出登录
    public function logout(){

        //将session中的对应的用户信息清空
        session('admin_name',null);
        session('admin_id',null);
        //redirect 重定向
        return redirect('Login/login');
    }

    public function captcha(){
        $captcha=new Captcha([
            'fontSize' => 18,
            'useCurve' => false,
            'imageH' => 40,
            'imageW' => 130,
            'length' => 4
        ]);

        //返回图片的路径
        return $captcha->entry();
    }

}