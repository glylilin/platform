<?php

use think\migration\Migrator;
use think\migration\db\Column;

class User extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('user',array('engine'=>'MyISAM'));
        $table->addColumn('username','string',array('limit'=>200,'default'=>'','comment'=>'用户名'))
        ->addColumn('password','string',array('limit'=>200,'default'=>'','comment'=>'密码'))
        ->addColumn("salt",'string',array('limit'=>20,'default'=>'','comment'=>"附加"))
        ->addColumn('phone','string',array('limit'=>11,'default'=>'',"comment"=>"电话"))
        ->addColumn("wechat_no",'string',array('limit'=>200,'default'=>'','comment'=>'微信号'))
        ->addColumn("wechat_openid",'string',array('limit'=>200,'default'=>'','comment'=>'微信openid'))
        ->addColumn('nickname','string',array('limit'=>200,'default'=>"",'comment'=>"昵称"))
        ->addColumn('type','integer',array('limit'=>10,'default'=>1,'comment'=>'1:普通用户2:导师3:管理员'))
        ->addColumn('register_ip','string',array('limit'=>200,'default'=>'','comment'=>'注册ip'))
        ->addColumn('login_ip','string',array('limit'=>200,'default'=>'','comment'=>'登录ip'))
        ->addColumn('create_time','integer',array('limit'=>11,'default'=>0,'comment'=>"创建时间"))
        ->addColumn('update_time','integer',array('limit'=>11,'default'=>0,'comment'=>'修改时间'))
        ->addColumn('status','integer',array('limit'=>1,'default'=>0,'comment'=>'0表示未通过审核1:表示通过审核'))
        ->addColumn('is_del','integer',array('limit'=>1,'default'=>0,'comment'=>"0:表示未删除1:表示已删除"))
        ->addIndex(['username'],['unique'=>true])->create();
    }
}
