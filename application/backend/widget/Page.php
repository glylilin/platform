<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/11
 * Time: 17:00
 */
namespace apps\backend\widget;
use think\Request;
use think\Url;

class Page{
    public function pagelist($count){
    $request = Request::instance();
    $parms = $request->param();
        $parms['page'] = isset($parms['page']) && $parms['page'] ? $parms['page'] : 1;
        $page =$parms['page'];
        $url =Url::build($request->module()."/".$request->controller().'/'.$request->action(),$parms);

$page =<<<P
<div id="page"></div>
<script>
    layui.use(['laypage', 'layer'], function(){
        var laypage = layui.laypage
                ,layer = layui.layer;
        //总页数大于页码总数
        laypage.render({
            elem: 'page'
            ,count: $count //数据总数
            ,curr:$page
            ,jump: function(obj){
            if(obj.curr != $page)
            {
               var url = "$url".replace('page/'+$page,'page/'+obj.curr);
               window.location.href=url;
            }
        }
        });
    });
</script>
P;
return $page;
    }
}