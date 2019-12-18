<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/1
 * Time: 19:03
 */
 namespace app\index\Controller;
 
 use think\Controller;
 
 class Zixun extends Controller{
     
    public function hotpot(){

        $id=input('param.id');
        $data=db('Article')->where('id','=',$id)->select();
        return view('',['data'=>$data]);
    }
 }