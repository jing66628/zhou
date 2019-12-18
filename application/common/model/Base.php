<?php
/**
 * Created by code.
 * User: Administrator
 * Date: 2019/12/5 
 * Time: 20:44
 */

namespace app\common\model;


use think\Model;

class Base extends Model{

    /**
     * 将无限级分类的数据进行排序
     * @param $data  要排序的数据
     * @param int $pid  上级id
     * @param int $level  分层  看多几个小横线
     * @return array
     */
    public function order_data($data, $pid = 0, $level = 0){
        //为了防止初始化，将数据置空，用static声明数组
        static $arr = [];

        foreach ($data as $k=>$v){
            if($pid == $v['pid']){
                $v['level'] = $level;
                $arr[] = $v;
                $this->order_data($data,$v['id'], $level + 1);
            }
        }
        return $arr;
    }

    /**
     * 获取前三层的子类数据
     * @param $data
     * @return array
     */
    public function getChilds($data){
        $arr = [];
        foreach ($data as $k=>$v){
            if($v['pid'] == 0){
                foreach ($data as $k1=>$v1){
                    if($v1['pid'] == $v['id']) {
                        foreach ($data as $k2=>$v2){
                            if($v2['pid'] == $v1['id']){
                                $v1['child'][] = $v2;
                            }
                        }
                        $v['child'][] = $v1;
                    }
                }
                $arr[] = $v;
            }
        }
        return $arr;
    }

}