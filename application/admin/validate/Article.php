<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/2 
 * Time: 18:26
 */
namespace app\admin\validate;

use think\Validate;

class Article extends Validate{
    protected $rule=[
        'title'=>'require',
        'author'=>'require',
        'content'=>'require',
    ];

    protected $message=[
        'title.require'=>'资讯标题不能为空',
        'author.require'=>'资讯作者不能为空',
        'content.require'=>'资讯内容不能为空',
    ];
}