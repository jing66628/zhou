<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/21
 * Time: 19:03
 */
 namespace app\index\Controller;
 
 use think\Controller;
 
 class Navigation extends Controller{

    public function tickets(){
        $data=db('Product')->where('status','=','1')->select();
        return view('',['data'=>$data]);
    }

    public function live(){
        return view('');
    }

    public function scenery(){
        return view('');
    }
    public function ceremony(){
        return view('');
    }
    public function food(){
        return view('');
    }
    public function entertainment(){
        return view('');
    }
 }