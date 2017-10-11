<?php
namespace apps\backend\controller;

use think\Loader;

class Index extends  Base
{
    public function index()
    {
       $menu =  Loader::controller("menu",'widget');

        return $this->fetch();
    }
}
