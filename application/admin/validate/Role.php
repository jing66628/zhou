<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/5 
 * Time: 13:11
 */
namespace app\admin\validate;


use think\Validate;

class Role extends Validate{

    protected $rule=[
        'role_name'=>'require|unique:role',
    ];

    protected $message=[
        'role_name.require'=>'角色名称不能为空！',
        'role_name.unique'=>'角色名称已存在！',
    ];
}