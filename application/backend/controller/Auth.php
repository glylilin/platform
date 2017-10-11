<?php
namespace apps\backend\controller;
use apps\backend\validate\User;
use think\Controller;
use think\Request;
use think\Session;
use think\Url;

class Auth extends Controller{
    public function login(){
        $this->view->engine->layout(false);
        $request = Request::instance();
        $message = "";
        if($request->isPost()){
            $data = $request->post();
            $validate = new User();
            if($validate->check($data)){
                $this->success("登录成功",Url::build("/"));
            }else{
                $message = $validate->getError();
            }
        }
        return $this->fetch($request->action(),['message'=>$message]);
    }

    public function logout(){
        Session::clear("backend_");
        $this->redirect(Url::build("/"));
    }
}