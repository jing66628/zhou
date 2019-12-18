<?php

namespace app\common\Model;

use think\Model;
use app\admin\validate\Product as ProductValidate;

class Product extends Model{

    public function sel(){
        $where=[];
        //获取提交时间
        $s_time = input('param.start_time');
        $e_time = input('param.end_time');
        //将对应的字符串截取年月日,然后拼接上时分秒
        $_start_time = $s_time.' 00:00:00';
        $_end_time = $e_time.' 23:59:59';
        //将拼接好的时分秒进行时间戳转化
        $start_time = strtotime($_start_time);
        $end_time = strtotime($_end_time);

        //时间查询
        if(!empty($s_time) && !empty($e_time)){
            //若填写了开始时间和结束时间，将时间用between对where变量进行赋值
            $where['update_time'] = ['between',[$start_time,$end_time]];
        }else if(!empty($s_time)){
            //若填写了开始时间，只将开始时间写入where
            $where['update_time'] = ['>=',$start_time];
        }else if(!empty($e_time)){
            //若填写了结束时间，则只将结束时间写入where
            $where['update_time'] = ['<=',$end_time];
        }

        //资讯名称查询
        $product_name=input('param.product_name');
        if (!empty($product_name)) {
            $where['product_name']=['=',$product_name];
        }

        $data=$this->where($where)->select();
        return $data;
    }


    public function addData(){
        $dt=input('post.');
        //参数验证
        $validate=new ProductValidate();
        if(!$validate->check($dt)){
            return $validate->getError();
        }

        $dt['update_time']=time();

        $str='\\uploads\\'.session('url');
        $dt['product_url']=strtr($str,'\\','/');
        $res=$this->allowField(true)->save($dt);

        session('url',null);

        if(!$res){
            return '添加失败！';
        }

        return true;
    }

    public function editData(){
        $dt=input('post.');
        $id=input('param.id');

        $validate=new ProductValidate();
        if(!$validate->check($dt)){
            return $validate->getError();
        }
        $dt['update_time']=time();

        $str='\\uploads\\'.session('url');
        $dt['product_url']=strtr($str,'\\','/');
        
        $res=$this->allowField(true)->save($dt,['id' => $id]);

        session('url',null);

        if(!$res){
            return '修改失败！';
        }

        return true;
    }

}