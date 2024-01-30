<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154914_reparticion extends Migration
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
            '{{%reparticion}}',
            [
                'id'=> $this->primaryKey(11),
                'reparticion'=> $this->string(50)->notNull(),
                'prioridad'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_4F79FE864F79FE86','{{%reparticion}}',['reparticion'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_4F79FE864F79FE86', '{{%reparticion}}');
        $this->dropTable('{{%reparticion}}');
    }
}
