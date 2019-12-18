<?php
namespace app\index\Controller;

class Index
{
    public function index()
    {
        $data=db('Article')->where('status','=','1')->select();
        return view('',['data'=>$data]);
    }
}
