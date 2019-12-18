<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/11/23
 * Time: 10:45
 */
namespace app\common\Model;

use think\Model;


 class Order extends Model{


     public function order_addData(){
         $dt=input('post.');

         $dt['create_time']=time();
         $dt['order_user']=session('user_name');
         $dt['order_id']='bt'.date('Ymd').rand(10000,99999);

         $data=$this->allowField(true)->save($dt);
         
         if(!$data){
             return '提交失败!';
         }

         return true;
     }

     
     public function bookDisplay(){

        $order_user=session('user_name');
        $data=[];
        if($order_user){
            $data=$this->where('order_user','=',$order_user)->select();
        }
        return $data;
     }

     public function editData(){
        $dt=input('post.');
        
        $res =$this->allowField(true)->save($dt,['id'=>$dt=['id']]);
        if(!$res){
            return '更新失败!';
        }

        return true;

     }

    public function sel(){

        $where=[];
        //日期查询
        //先获取当前提交的日期
        $s_time=input('param.start_time');
        $e_time=input('param.end_time');

        //将对应的字符串截取年月日
        $start_time=substr($s_time,0,10);
        $end_time=substr($e_time,0,10);

        if(!empty($s_time) && !empty($e_time)){
            //若填写了开始时间和结束时间，将时间用between对where变量惊醒赋值
            $where['paly_date']=['between',[$start_time,$end_time]];
        }else if(!empty($s_time)){
            //若只填写了开始时间，没有填写结束时间，则只将开始时间写入where
            $where['paly_date']=['>=',$start_time];
        }else if(!empty($e_time)){
            //若只写了结束时间，则将结束时间写入where
            $where['paly_date']=['<=',$end_time];
        }

        //订票用户名查询    
        $order_user=input('param.order_user');
        if (!empty($order_user)) {
            $where['order_user']=['=',$order_user];
        }
        
        $data=$this->where($where)->select();


        return $data;

    }

     
 }