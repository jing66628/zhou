<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/3 
 * Time: 19:20
 */
namespace app\common\model;

use think\Model;
use app\admin\validate\Admin as AdminValidate;


class Admin extends Model{

    public function addData(){
        $dt=input('post.');

        if(empty($dt['admin_roleid'])){
            return '请选择角色';
        }

        //进行数据验证
        $validate=new AdminValidate();
        if(!$validate->check($dt)){
            return $validate->getError();
        }

        //将密码进行MD5加密
        $password = $dt['admin_pass'];
        //config('admin_base.md5_prefix')   是指获取文件夹extra中的admin_base.php 中的md5_prefix的值
        //md5加密出来的都是32位
        $dt['admin_pass'] = md5(config('admin_base.md5_prefix').$password);

        //往数组中添加创建时间
        $dt['add_time']=time();

        $res=$this->allowField(true)->save($dt);

        if(!$res){
            return '添加失败！';
        }

        return true;

    }

    public function editData(){
        $dt=input('post.');

        if(empty($dt['admin_roleid'])){
            return '请选择角色！';
        }

        $password=$dt['admin_pass'];
        
        if(empty($password)){
            //当没有填写密码时，表示用原来的密码，把数据中的密码unset
            unset($dt['admin_pass']);
        }else {
            //当填写了密码时，进行MD5加密
            $dt['admin_pass'] = md5(config('admin_base.md5_prefix').$password);
        }
        $res=$this->allowField(true)->save($dt,['id'=>$dt['id']]);
        if(!$res){
            return '更新失败！';
        }

        return true;
    }

    public function sel(){

        $where=[];

         //先获取当前提交的时间数据
         $s_time = input('param.start_time');
         $e_time = input('param.end_time');

         //将对应的字符串截取年月日,即2017-12-03,然后拼接上时分秒
        $_start_time = $s_time.' 00:00:00';
        $_end_time = $e_time.' 23:59:59';
        //将拼接好的时分秒进行时间戳转化
        $start_time = strtotime($_start_time);
        $end_time = strtotime($_end_time);
        
        if(!empty($s_time) && !empty($e_time)){
            //若填写了开始时间和结束时间，将时间用between对where变量进行赋值
            $where['login_time'] = ['between',[$start_time,$end_time]];
        }else if(!empty($s_time)){
            //若填写了开始时间，而没有填写结束时间，则只将开始时间写入where
            $where['login_time'] = ['>=',$start_time];
        }else if(!empty($e_time)){
            //若填写了结束时间，而没有填写开始时间，则只将结束时间写入where
            $where['login_time'] = ['<=',$end_time];
        }
        /**************管理员名称*******************/
        $admin_name = input('param.admin_name');
        if(!empty($admin_name)){
            $where['admin_name'] = ['=',$admin_name];
        }

        // $data=$this->where($where)->select();

        $data = $this->alias('a')
        ->field('a.*,(b.role_name) role_names')
        ->join('role b','a.admin_roleid = b.id','LEFT')
        ->where($where)
        ->paginate(15);

        return $data;
    }


}