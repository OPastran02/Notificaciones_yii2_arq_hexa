<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165747_acta_motivo extends Migration
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
            '{{%acta_motivo}}',
            [
                'id'=> $this->primaryKey(11),
                'motivo'=> $this->string(10)->notNull(),
                'motivoCompleto'=> $this->string(150)->notNull(),
                'tipo'=> $this->string(1)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_CA5750019F93866','{{%acta_motivo}}',['motivo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_CA5750019F93866', '{{%acta_motivo}}');
        $this->dropTable('{{%acta_motivo}}');
    }
}
