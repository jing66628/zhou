<?php 

/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 14:58
 */

namespace app\admin\Controller;


class Admin extends Base{



        public function lst(){
            $data=model('Admin')->sel();
            return view('',['data'=>$data]);
        }

        public function add(){
            if(request()->isPost()){
                try{
                    $res = model('Admin')->addData();
                    if($res !== true){
                        throw new \Exception($res);
                    }
                }catch (\Exception $e){
                    $this->error($e->getMessage());
                }
                $this->success('添加成功','lst');
            }
            
            $role_date = db('role')->select();
            return view('',['role_date' => $role_date]);
        }

        public function edit(){
            if(request()->isPost()){
                try{
                    $res = model('Admin')->editData();
                    if($res !== true){
                        throw new \Exception($res);
                    }
                }catch (\Exception $e){
                    $this->error($e->getMessage());
                }
                $this->success('更新成功','lst');
            }
            
            $id=input('param.id');
            $data=db('Admin')->where('id','=',$id)->select();
            return view('',['data'=>$data[0]]);
        }
        

        public function del(){
            $id=input('param.id');
            $res=model('Admin')->where('id','=',$id)->delete();
            if($res){
                $arr=[
                    'status'=>1,
                    'msg'=>'删除成功！'
                ];
            }else{
                $arr=[
                    'status'=>2,
                    'msg'=>'删除成功！'
                ];
            }
            echo json_encode($arr);
            exit;
        }


        // 停用
        public function stop(){
            $id=input('post.id');
            $res=db('Admin')->where('id','=',$id)->update(['status'=>2]);
            if($res){
                $arr = [
                    'status' => 1,
                    'msg' => '已停用！',
                ];
            }else{
                $arr = [
                    'status' => 2,
                    'msg' => '操作失败！',
                ];
            }
            echo json_encode($arr);
            exit;
        }


        // 启用
        public function start(){
            $id=input('post.id');
            $res=db('Admin')->where('id','=',$id)->update(['status'=>1]);
            if($res){
                $arr = [
                    'status' => 1,
                    'msg' => '已启用！',
                ];
            }else{
                $arr = [
                    'status' => 2,
                    'msg' => '操作失败！',
                ];
            }
            echo json_encode($arr);
            exit;
        }

}