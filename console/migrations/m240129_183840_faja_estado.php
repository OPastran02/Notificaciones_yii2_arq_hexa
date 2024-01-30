<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183840_faja_estado extends Migration
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
            '{{%faja_estado}}',
            [
                'id'=> $this->primaryKey(11),
                'estado'=> $this->string(20)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_7ACDF0D8265DE1E3','{{%faja_estado}}',['estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_7ACDF0D8265DE1E3', '{{%faja_estado}}');
        $this->dropTable('{{%faja_estado}}');
    }
}
