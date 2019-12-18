<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/5 
 * Time: 13:07
 */
namespace app\common\model;

use think\Model;
use app\admin\validate\Role as RoleValidate;

class Role extends Model{

    public static function init(){
        //添加后的事件
        /***将新添加的管理员的id和角色表的id插入到zz_role_auth(角色权限关联表)中***/
        self::event('after_insert',function ($role){
            $role_id = $role['id'];
            $auth_ids_arr = $role['auth_ids'];
            $flag = true;   //设置一个开关
            //添加管理员对应的角色
            foreach ($auth_ids_arr as $k=>$v){
                $res = db('role_auth')->insert([
                    'role_id' => $role_id,
                    'auth_id' => $v,
                ]);
                if(!$res){
                    $flag = false;
                    break;
                }
            }

            if($flag){
                return true;
            }else{
                return false;
            }

        });

        //更新后的事件(即调用更新的方法后会自动调用这个事件)
        self::event('after_update',function ($role){
            $role_id = $role['id'];
            $auth_ids_arr = $role['auth_ids'];
            $db = db('role_auth');
            //现将原来的管理员对应的角色都删除
            $del_res = $db->where('role_id','=',$role_id)->delete();
            //再重新添加管理员对应的角色
            foreach ($auth_ids_arr as $k=>$v){
                $res = $db->insert([
                    'role_id' => $role_id,
                    'auth_id' => $v,
                ]);
            }
        });
    }

    public function sel(){
        // $data=$this->select();

        $where=[];
        // field ：制定查询哪些字段
        // alias : 制定表的别名
        // join : 关联表
        // group_concat : 将内容按照逗号拼接成字符串
        //如果使用group_concat拼接  必须使用group分组
        $data = $this->alias('a')
            ->field('a.*,group_concat(c.auth_name) auth_names')
            ->join('role_auth b','a.id = b.role_id','LEFT')
            ->join('auth c','b.auth_id = c.id','LEFT')
            ->where($where)
            ->group('a.id')
            ->select();
            
        return $data;
    }

    public function addData(){
        $dt=input('post.');

        //判断是否有选择角色
        if(empty($dt['auth_ids'])){
            return '请选择权限！';
        }

        //进行数据验证
        $validate=new RoleValidate();
        if(!$validate->check($dt)){
            return $validate->getError();
        }

        $dt['create_time']=time();
        
        $res=$this->allowField(true)->save($dt);
        if(!$res){
            return '添加失败！';
        }

        return true;
    }

    
    public function editData(){
        $dt = input('post.');

        //判断是否有选择角色
        if(empty($dt['auth_ids'])){
            return '请选择角色';
        }

        $dt['create_time']=time();
        //先进行数据验证
        $validate = new RoleValidate();
        //验证添加的场景
        if(!$validate->check($dt)){
            return $validate->getError();
        }

        $res = $this->allowField(true)->save($dt,['id'=>$dt['id']]);
        if(!$res){
            return '更新失败！';
        }
        return true;
    }

}