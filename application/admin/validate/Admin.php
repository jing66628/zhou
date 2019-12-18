<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/3 
 * Time: 19:11
 */
namespace app\admin\validate;


use think\Validate;

class Admin extends Validate{

    protected $rule=[
        'admin_name'=>'require|length:3,10|unique:admin',
        'admin_pass'=>'require|length:4,16',
        'admin_pass2'=>'require|length:4,16|confirm:admin_pass',
    ];

    protected $message=[
        'admin_name.require'=>'管理员名称不能为空！',
        'admin_name.length'=>'管理员名称长度在3-10之间！',
        'admin_name.unique'=>'管理员名称已存在',
        'admin_pass.require'=>'密码不能为空！',
        'admin_pass.length'=>'密码长度在4-16之间！',
        'admin_pass2.require'=>'确认密码不能为空！',
        'admin_pass2.length'=>'确认密码长度在4-16之间！',
        'admin_pass2.confirm'=>'两次密码输入不一致！',
    ];

}