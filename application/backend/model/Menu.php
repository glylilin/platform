<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/11
 * Time: 14:48
 */
namespace apps\backend\model;
class Menu extends  \think\Model{
    protected $autoWriteTimestamp = true;

    /**
     * @return false|static[] 獲取所有的數據
     */
    public function menuList(){
       return  $this->field(['name','module','controller','action','params','root_id','parent_id','id'])->where('status',1)->where('is_del',0)->order(['root_id'=>'asc','sort'=>'asc'])->select();
    }
}