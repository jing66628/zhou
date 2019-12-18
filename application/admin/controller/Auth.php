<?php
/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 15:48
 */
namespace app\admin\Controller;


class Auth extends Base{

    public function lst(){
        $data=model('Auth')->sel();
        return view('',['data'=>$data]);
    }

    public function add(){
        if(request()->isPost()){
            try{
                $res = model('Auth')->addData();
                if($res !== true){
                    throw new \Exception($res);
                }
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('添加成功','lst');
        }
        //查询所有的上级权限
        $data = db('Auth')->order('ids_path asc')->select();
        return view('',['data'=>$data]);
    }


    public function edit(){
        if(request()->isPost()){
            try{
                $res=model('Auth')->editData();
                if($res!==true){
                    throw new \Exception($res);
                }
            }catch(\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('更新成功！','lst');
        }

        //查询所有的上级权限
        $db=model('Auth');
        $data=$db->order('ids_path asc')->select();
        $id=input('param.id');
        $dt=$db->find($id);
        return view('',['data'=>$data,'dt'=>$dt]);
    }

    public function del(){
        $id = input('param.id');

        $re=model('Auth')->where('pid','=',$id)->find();
        if($re){
            $arr = [
                'status'=> 2,
                'msg'=> '有子类权限，不能删除！'
            ];
        }else {
            //如果没有子分类，执行删除语句
            $res=model('Auth')->where('id','=',$id)->delete();
            if($res){
                $arr=[
                    'status' => 1,
                    'msg'=>'删除成功！'
                ];
            }else {
                $arr=[
                    'status' => 2,
                    'msg' => '删除失败！'
                ];
            }
        }

        echo json_encode($arr);
        exit;
    }


}