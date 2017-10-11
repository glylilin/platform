<?php
namespace apps\backend\controller;
class Tutor extends  Base{
    public function tags(){
        return $this->fetch();
    }

    public function addtag(){
        return $this->fetch();
    }
}