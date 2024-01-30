<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154223_laboratorio_programa_determinacion extends Migration
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
            '{{%laboratorio_programa_determinacion}}',
            [
                'programa_id'=> $this->integer(11)->notNull(),
                'determinacion_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_F09B6667FD8A7328','{{%laboratorio_programa_determinacion}}',['programa_id'],false);
        $this->createIndex('IDX_F09B6667AA7041B7','{{%laboratorio_programa_determinacion}}',['determinacion_id'],false);
        $this->addPrimaryKey('pk_on_laboratorio_programa_determinacion','{{%laboratorio_programa_determinacion}}',['programa_id','determinacion_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_laboratorio_programa_determinacion','{{%laboratorio_programa_determinacion}}');
        $this->dropIndex('IDX_F09B6667FD8A7328', '{{%laboratorio_programa_determinacion}}');
        $this->dropIndex('IDX_F09B6667AA7041B7', '{{%laboratorio_programa_determinacion}}');
        $this->dropTable('{{%laboratorio_programa_determinacion}}');
    }
}
