<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155255_tipo_actuacion extends Migration
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
            '{{%tipo_actuacion}}',
            [
                'id'=> $this->primaryKey(11),
                'tipoActuacion'=> $this->string(2)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_D07B3C9D48E11ED9','{{%tipo_actuacion}}',['tipoActuacion'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_D07B3C9D48E11ED9', '{{%tipo_actuacion}}');
        $this->dropTable('{{%tipo_actuacion}}');
    }
}
