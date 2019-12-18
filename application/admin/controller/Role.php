<?php
/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 15:38
 */
namespace app\admin\Controller;


class Role extends Base{

    public function lst(){
        $data=model('Role')->sel();
        return view('',['data'=>$data]);
    }
    public function add(){
        if(request()->isPost()){
            try{
                $res = model('Role')->addData();
                if($res !== true){
                    throw new \Exception($res);
                }
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('添加成功','lst');
        }
        //将所有的权限都查询出来
        $auth_data = db('auth')->order('ids_path asc')->select();
        return view('',['auth_data'=>$auth_data]);
    }

    public function edit(){
        if(request()->isPost()){
            try{
                $res=model('Role')->editData();
                if($res!==true){
                    throw new \Exception($res);
                }
            }catch(\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('更新成功','lst');
        }
        $id=input('param.id');

        $auth_data = db('auth')->order('ids_path')->select();
        $data=model('Role')
            ->field('a.*,group_concat(b.auth_id) auth_ids')
            ->alias('a')
            ->join('role_auth b','a.id = b.role_id')
            ->find($id);
        return view('',['data'=>$data,'auth_data'=>$auth_data]);
    }


    public function del(){

        $id=input('param.id');
        $res=model('Role')->where('id','=',$id)->delete();
        if($res){
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


}

