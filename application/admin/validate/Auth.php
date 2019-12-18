<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/4 
 * Time: 20:57
 */
namespace app\admin\validate;


use think\Validate;

class Auth extends Validate{

    protected $rule=[
        'auth_name'=>'require|unique:auth',
        'pid'=>'require',
    ];

    protected $message=[
        'auth_name.require' => '权限名称不能为空',
        'auth_name.unique' => '权限名称已存在',
        'pid.require' => '上级权限不能为空',
    ];

}