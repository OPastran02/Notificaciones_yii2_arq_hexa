<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155356_tipo_tratamiento extends Migration
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
            '{{%tipo_tratamiento}}',
            [
                'id'=> $this->primaryKey(11),
                'tipoTratamiento'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_54808E8415F5DDFB','{{%tipo_tratamiento}}',['tipoTratamiento'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_54808E8415F5DDFB', '{{%tipo_tratamiento}}');
        $this->dropTable('{{%tipo_tratamiento}}');
    }
}
