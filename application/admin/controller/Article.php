<?php 

/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 14:58
 */

namespace app\admin\Controller;

class Article extends Base{

    public function lst(){

        $data=model('Article')->sel();
        return view('',['data'=>$data]);
    }

    public function add(){
        if(request()->isPost()){
            try{
                $res=model('Article')->addData();
                if($res!==true){
                    throw new \Exception($res);
                }
            }catch(\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('添加成功','lst');
        }
        return view('');
    }
    
    public function edit(){
        if(request()->isPost()){
            try{
                $res=model('Article')->editData();
                if($res!==true){
                    throw new \Exception($res);
                }
            }catch(\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('更新成功','lst');
        }
        $id=input('param.id');
        $data=db('article')->where('id','=',$id)->select();
        return view('',['data'=>$data]);
    }

    public function del(){
        $id=input('param.id');
        $res=model('Article')->where('id','=',$id)->delete();
        if($res){
            $arr = [
                'status' => 1,
                'msg' => '删除成功！'
            ];
        }else{
            $arr = [
                'status' => 2,
                'msg' => '删除失败！'
            ];
        }
        echo json_encode($arr);
        exit;
    }

    public function stop(){
        $id=input('post.id');
        $res=db('article')->where('id','=',$id)->update(['status'=>2]);
        if($res){
            $arr=[
                'status'=>1,
                'msg'=>'已下架！',
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

    public function start(){
        $id=input('post.id');
        $data=db('Article')->where('status','=','1')->select();
        $count=count($data);

        $res=[];
        if ($count < 3) {
            $res=db('article')->where('id','=',$id)->update(['status'=>1]);
        }else {
            $arr=[
                'status'=>2,
                'msg'=>'只能发布三篇！',
            ];
            echo json_encode($arr);
            exit;
        }

        if($res){
            $arr=[
                'status'=>1,
                'msg'=>'已发布！',
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