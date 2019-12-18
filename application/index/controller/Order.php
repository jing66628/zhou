<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/19
 * Time: 22:45
 */
 namespace app\index\Controller;



 class Order extends Base{

    //添加订单
     public function booking(){

        if(request()->isPost()){
            try {
                $res=model('Order')->order_addData();
                if($res!=true){
                    throw exception($res);
                }
            } catch (\exception $e) {
                return $this->error($e->getMessage());
            }
            return $this->success('提交成功','booklist');
        }
        $id=input('param.id');
        $data=db('Product')->where('id','=',$id)->select();
         return view('',['data'=>$data]);
     }

     //个人中心订单查询
     public function booklist(){

        $data=model('Order')->bookDisplay();

        return view('',['data'=>$data]);
    }



     //个人中心订单修改
     public function bookedit(){

        if(request()->isPost()){
            try{
                $res=model('Order')->editData();
                if($res!==true){
                    throw new \exception($res);
                }
            }catch(\exception $e){
                $this->error($e->getMessage());
            }
            $this->success('更新成功','booklist');
        }
        $id=input('param.id');
        $data=[];
        if($id){
            $data=db('order')->where('id','=',$id)->select();
        }
        return view('',['data'=>$data]);
     }

     public function bookdel(){
         $id=input('param.id');
         $res=model('Order')->where('id','=',$id)->delete();

         if($res){
             $arr=[
                 'status'=>1,
                 'msg'=>'取消订单成功！'
             ];
         }else {
            $arr=[
                'status'=>2,
                'msg'=>'取消订单失败！'
            ];
         }
         echo json_encode($arr);
         exit;
     }



 }