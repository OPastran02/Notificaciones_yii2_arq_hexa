<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165246_acta_estado extends Migration
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
            '{{%acta_estado}}',
            [
                'id'=> $this->primaryKey(11),
                'estado'=> $this->string(20)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_3301AC85265DE1E3','{{%acta_estado}}',['estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_3301AC85265DE1E3', '{{%acta_estado}}');
        $this->dropTable('{{%acta_estado}}');
    }
}
