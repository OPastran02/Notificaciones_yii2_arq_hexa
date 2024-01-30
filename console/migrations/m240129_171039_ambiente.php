<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171039_ambiente extends Migration
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
            '{{%ambiente}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo'=> $this->char(1)->notNull(),
                'ambiente'=> $this->string(45)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('id_UNIQUE','{{%ambiente}}',['id'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('id_UNIQUE', '{{%ambiente}}');
        $this->dropTable('{{%ambiente}}');
    }
}
