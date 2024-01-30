<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155325_tipo_dispo extends Migration
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
            '{{%tipo_dispo}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo_dispo'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_4E87D7E74E87D7E7','{{%tipo_dispo}}',['tipo_dispo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_4E87D7E74E87D7E7', '{{%tipo_dispo}}');
        $this->dropTable('{{%tipo_dispo}}');
    }
}
