<?php 
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/3 
 * Time: 20:16
 */
namespace app\admin\Controller;

use think\Controller;

class Base extends Controller{

    public function _initialize(){
        $admin_name=session('admin_name');
        $admin_id=session('admin_id');
        if(empty($admin_name)){
            $this->success('请登录','Login/login');
        }

        //当前登录人是admin时，具有所有的权限
        if($admin_name == 'admin'){
            return true;
        }else {
            //获取当前的请求模块名称
            $module = request()->module();
            //获取当前的请求控制器名称
            $controller = request()->controller();
            //获取当前的请求方法名称
            $action = request()->action();

            //获取当前登录人是否有当前访问的页面的权限
            $data = db('role_auth')
                ->field('count(*) count')
                ->alias('a')
                ->join('auth b','a.auth_id = b.id','LEFT')
                ->join('admin c','a.role_id = c.admin_roleid','LEFT')
                ->where('b.auth_m','=',$module)
                ->where('b.auth_c','=',$controller)
                ->where('b.auth_f','=',$action)
                ->where('c.admin_name','=',$admin_name)
                ->find();

            if(!$data['count']){
                //如果是ajax请求
                if(request()->isAjax()){
                    echo json_encode([
                        'status'=>2,
                        'msg'=>'您没有权限访问，请联系管理员！',
                    ]);
                }else {
                    //如果不是
                    $referer = $_SERVER['HTTP_REFERER'];
                    echo "<center><h1>您没有权限访问，请联系管理员！</h1><h2><a href='{$referer}'>返回上级</a></h2></center>";
                }
                exit;
            }
        }
    }

}