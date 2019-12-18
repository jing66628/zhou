<?php
/**
 * Created by Code.
 * User: Administrator
 * Date: 2019/11/29
 * Time: 00：30
 */
namespace app\admin\Controller;


class Order extends Base{

    public function lst(){
        
        $data=model('Order')->sel();
        return view('',['data'=>$data]);
        
    }

    public function del(){
        $id=input('param.id');
        $res=model("Order")->where('id','=',$id)->delete();

        if($res){
            $arr=[
                'status'=>1,
                'msg'=>'取消订单成功！'
            ];
        }else {
            $arr=[
                'status'=>2,
                'msg'=>'删除订单失败!'
            ];
        }

        echo json_encode($arr);
        exit;
    }

}