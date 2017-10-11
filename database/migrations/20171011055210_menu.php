<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Menu extends Migrator
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
       $table = $this->table('menu',['engine'=>'MyISAM']);
        $table->addColumn("name",'string',['limit'=>200,'default'=>"",'comment'=>'名称'])
            ->addColumn('module','string',['limit'=>200,'default'=>'','comment'=>'模块'])
            ->addColumn('controller','string',['limit'=>200,'default'=>'','comment'=>'控制器'])
            ->addColumn('action','string',['limit'=>200,'default'=>'','comment'=>"方法"])
            ->addColumn('params','string',['limit'=>200,'default'=>'',"null"=>true,'comment'=>"参数"])
            ->addColumn('root_id','integer',['limit'=>11,"default"=>0,'comment'=>"顶级父级"])
            ->addColumn('parent_id','integer',['limit'=>11,'default'=>0,'comment'=>'父级'])
            ->addColumn('status','integer',['limit'=>1,'default'=>1,'comment'=>'1激活0未激活'])
            ->addColumn('is_del','integer',['limit'=>1,'default'=>0,'comment'=>'0未删除1删除'])
            ->addColumn('create_time','integer',['limit'=>11,'default'=>0,'comment'=>'添加時間'])
            ->addColumn('update_time','integer',['limit'=>11,'default'=>0,'comment'=>"修改时间"])
            ->addColumn('sort','integer',['limit'=>11,'default'=>1,'comment'=>"排序"])->create();

    }
}
