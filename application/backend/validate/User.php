<?php
namespace apps\backend\validate;

use think\Validate;

class User extends  Validate{
    protected   $rule = [
      'username'=>"require|token",
      'password'=>'require|checkPwd'
  ];
    protected  function  checkPwd($value,$rule,$data){
        $user_model = new \apps\backend\model\User();
        if($user_model->login($data) ){
            return true;
        }
        return "用户不存在";
    }
}