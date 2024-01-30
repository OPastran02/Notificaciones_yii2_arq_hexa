<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183502_estado extends Migration
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
            '{{%estado}}',
            [
                'id'=> $this->primaryKey(6),
                'Estado'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_265DE1E321F1E4D5','{{%estado}}',['Estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_265DE1E321F1E4D5', '{{%estado}}');
        $this->dropTable('{{%estado}}');
    }
}
