<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/22
 * Time: 13:51
 */

namespace app\index\Controller;

use think\Controller;

class Base extends Controller{
    //在控制器初始化的适合判断是否登录
    public function _initialize(){
        $index_user=session('user_name');
        $index_id=session('user_id');
        if(empty($index_user)){
            $this->success('请登录','User/login');
        }
    }
}