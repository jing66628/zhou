<?php 

/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/27
 * Time: 15:05
 */

namespace app\admin\Controller;


class Product extends Base{

    public function lst(){
        $data=model('Product')->sel();
        return view('',['data'=>$data]);
    }

    public function add(){
        if(request()->isPost()){
            if (!session('url')) {
                $this->error('请上传图片！');
            }
            try{
                $res=model('Product')->addData();
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
            if (!session('url')) {
                $this->error('请上传图片！');
            }
            try{
                $res=model('Product')->editData();
                if($res!==true){
                    throw new \Exception($res);
                }
            }catch(\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success('修改成功','lst');
        }

        $id=input('param.id');
        $data=model('Product')->where('id','=',$id)->select();

        return view('',['data'=>$data]);
    }

    public function del(){
        $id=input('param.id');
        $res=model('Product')->where('id','=',$id)->delete();
        
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


    public function add_uploads(){
        $file=request()->file('file');
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        }
        if($info){
            // 成功上传后 获取上传信息
            $url= $info->getSaveName();
            session('url',$url);
        }
    }

    public function stop(){
        $id=input('post.id');
        $res=db('Product')->where('id','=',$id)->update(['status'=>2]);
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
        $data=db('Product')->where('status','=','1')->select();
        $count=count($data);

        $res=[];
        if ($count < 3) {
            $res=db('Product')->where('id','=',$id)->update(['status'=>1]);
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

