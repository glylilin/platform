<?php
namespace apps\backend\model;
use think\Request;
use think\Session;

class User extends  \think\Model{
    protected $autoWriteTimestamp = true;
    public function login($data){
        $res = $this->where("username",$data['username'])->where('is_del',0)->where('type',3)->where('status',1)->find();
        $res->login_ip = Request::instance()->ip();
        if($res && ($res->password == $data['password'])){
            $res->save();
            Session::set('userinfo',$res);
            return true;
        }
        return false;
    }
}