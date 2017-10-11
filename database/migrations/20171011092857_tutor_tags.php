<?php

use think\migration\Migrator;
use think\migration\db\Column;

class TutorTags extends Migrator
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
        $table = $this->table('tutor_tags',array('engine'=>'MyISAM'));
        $table->addColumn('name','string',['limit'=>200,'comment'=>'名称'])
            ->addColumn('show','integer',['limit'=>1,'default'=>0,'comment'=>'1首页显示可用0首页不显示'])
            ->addColumn('status','integer',['limit'=>1,'default'=>1,'comment'=>'1可用0不可用'])
            ->addColumn('is_del','integer',['limit'=>1,'default'=>0,'comment'=>'0未删除1删除'])
            ->addColumn('create_time','integer',['limit'=>11,'default'=>0,'comment'=>'添加時間'])
            ->addColumn('update_time','integer',['limit'=>11,'default'=>0,'comment'=>"修改时间"])
            ->addColumn('sort','integer',['limit'=>11,'default'=>1,'comment'=>"排序"])->create();
    }
}
