<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/10
 * Time: 16:33
 */
namespace apps\backend\controller;
use think\Session;
use think\Url;

class Base extends  \think\Controller{
    protected $beforeActionList = [
        'auth'
    ];
    public function auth(){
        if(!Session::get("userinfo")){
            $this->error("请登录……",Url::build("/backend/auth/login"));
        }
    }
}