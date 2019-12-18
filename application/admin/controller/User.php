<?php
/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 15:20
 */
namespace app\admin\Controller;


class User extends Base{

    public function lst(){

        $data=model('User')->sel();
        return view('',['data'=>$data]);
    }

    public function del(){
        $id=input('param.id');
        $res=model('User')->where('id','=',$id)->delete();

        if ($res) {
            $arr=[
                'status'=>1,
                'msg'=>'删除成功！'
            ];
        }else {
            $arr=[
                'status'=>2,
                'msg'=>'删除失败！'
            ];
        }
        echo json_encode($arr);
        exit;
    }

    // 停用
    public function stop(){
        $id=input('post.id');
        $res=db('User')->where('id','=',$id)->update(['status'=>2]);

        if($res){
            $arr=[
                'status'=>1,
                'msg'=>'已停用！',
            ];
        }else {
            $arr=[
                'status'=>2,
                'msg'=>'操作失败！',
            ];
        }

        echo json_encode($arr);
        exit;

    }
    // 启用
    public function start(){
        $id=input('post.id');
        $res=db('User')->where('id','=',$id)->update(['status'=>1]);

        if($res){
            $arr=[
                'status'=>1,
                'msg'=>'已启用！',
            ];
        }else {
            $arr=[
                'status'=>2,
                'msg'=>'操作失败！',
            ];
        }

        echo json_encode($arr);
        exit;

    }
    
    

}