<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171335_circuito extends Migration
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
            '{{%circuito}}',
            [
                'id'=> $this->primaryKey(11),
                'circuito'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_30A9B06A30A9B06A','{{%circuito}}',['circuito'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_30A9B06A30A9B06A', '{{%circuito}}');
        $this->dropTable('{{%circuito}}');
    }
}
