<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/1 
 * Time: 10:52
 */
namespace app\common\Model;

use think\Model;
use app\admin\validate\Article as ArticleValidate;

class Article extends Model{

    public function sel(){
        $where=[];
        //获取提交时间
        $s_time = input('param.start_time');
        $e_time = input('param.end_time');
        //将对应的字符串截取年月日,然后拼接上时分秒
        $_start_time = $s_time.' 00:00:00';
        $_end_time = $e_time.' 23:59:59';
        //将拼接好的时分秒进行时间戳转化
        $start_time = strtotime($_start_time);
        $end_time = strtotime($_end_time);

        //时间查询
        if(!empty($s_time) && !empty($e_time)){
            //若填写了开始时间和结束时间，将时间用between对where变量进行赋值
            $where['update_time'] = ['between',[$start_time,$end_time]];
        }else if(!empty($s_time)){
            //若填写了开始时间，只将开始时间写入where
            $where['update_time'] = ['>=',$start_time];
        }else if(!empty($e_time)){
            //若填写了结束时间，则只将结束时间写入where
            $where['update_time'] = ['<=',$end_time];
        }

        //资讯名称查询
        $title=input('param.title');
        if (!empty($title)) {
            $where['title']=['=',$title];
        }

        $data=$this->where($where)->select();
        return $data;
    }

    public function addData(){
            $dt=input('post.');
            //将editor传过来的值进行转化
            $dt['content']=$dt['editorValue'];
            //当前时间赋值给更新时间
            $dt['update_time']=time();
            //参数验证
            $validate=new ArticleValidate();
            if(!$validate->check($dt)){
                return $validate->getError();
            }
            //添加到数据库
            $res=$this->allowField(true)->save($dt);

            if(!$res){
             return '添加失败';
            }
            return true;
    }

    public function editData(){

        $dt=input('post.');
        $id=input('param.id');
        //将editor传过来的值进行转化
        $dt['content']=$dt['editorValue'];
        //参数验证
        $validate=new ArticleValidate();
        if(!$validate->scene('edit')->check($dt)){
            return $validate->getError();
        }
        $res=$this->allowField(true)->save($dt,['id'=>$id]);
        if (!$res) {
            return '更新失败！';
        }
        return true;
    }
        


}