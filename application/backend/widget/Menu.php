<?php
namespace apps\backend\widget;
use think\Loader;
use think\Request;
use think\Url;
class Menu{
    public function menuTree(){
        $menuLogic =  Loader::model("menu",'logic');
        $data = $menuLogic->menuTree();
        $menu ='<ul class="layui-nav layui-layout-left">';
        if($data){
            foreach($data as $i){
                if($i['child']){
                    $menu .='<li class="layui-nav-item"><a href="javascript:;">'.$i->name.'</a><dl class="layui-nav-child">';
                        foreach($i->child as $c){
                            $menu .='<dd><a href="'.Url::build($c->module."/".$c->controller."/".$c->action,$c->params).'">'.$c->name.'</a></dd>';
                        }
                    $menu .='</dl></li>';
                }else{
                    $menu .='<li class="layui-nav-item"><a href="'.Url::build($i->module."/".$i->controller."/".$i->action,$i->params).'">'.$c->name.'</a></li>';
                }
           }
        }
        $menu .='</ul>';
        return $menu;
    }
}