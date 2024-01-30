<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171126_calles extends Migration
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
            '{{%calles}}',
            [
                'id'=> $this->primaryKey(11),
                'Calle'=> $this->string(70)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_7A4B4731EFB6C6DA','{{%calles}}',['Calle'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_7A4B4731EFB6C6DA', '{{%calles}}');
        $this->dropTable('{{%calles}}');
    }
}
