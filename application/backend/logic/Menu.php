<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/11
 * Time: 15:02
 */
namespace apps\backend\logic;
class Menu extends  \apps\backend\model\Menu{

    public function menuTree(){
        $result = $this->menuList();
        $data= [];
        if($result){
            foreach($result as $k=>$v){
                if($v->root_id == 0){
                    $data[] = $v;
                    unset($result[$k]);
                }
            }
            if($data){
                foreach($data as $ik=>$iv){
                    $child = [];
                    foreach($result as $k=>$v){
                        if($v->parent_id == $iv->id){
                            $child[]= $v;
                        }
                    }
                    $data[$ik]['child'] = $child;
                }
            }
        }
        unset($result);
        return $data;
    }
}
