<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/2 
 * Time: 18:26
 */
namespace app\admin\validate;

use think\Validate;

class Product extends Validate{
    protected $rule=[
        'product_name'=>'require',
        'product_price'=>'require',
        'product_describe'=>'require',
    ];

    protected $message=[
        'product_name.require'=>'产品标题不能为空！',
        'product_price.require'=>'产品单价不能为空！',
        'product_describe.require'=>'产品描述不能为空！',
    ];

}