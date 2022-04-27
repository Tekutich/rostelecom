<?php

use yii\db\Schema;
use yii\db\Migration;

class m220427_184832_queue_statuses extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%queue_statuses}}',
            [
                'id'=> $this->primaryKey(11),
                's_name'=> $this->string(512)->notNull(),
                'c_name'=> $this->string(512)->notNull(),
                'c_id'=> $this->integer(32)->notNull(),
                'a_type'=> $this->string(128)->notNull(),
                'direction'=> $this->string(32)->notNull(),
                'activation'=> $this->string(32)->notNull(),
                'c_state'=> $this->string(32)->notNull(),
                'control'=> $this->string(32)->notNull(),
                'datetime'=> $this->datetime()->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%queue_statuses}}');
    }
}
