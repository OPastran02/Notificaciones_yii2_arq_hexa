<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181220_encuesta_modeloencuesta_pregunta_deshabilitadas extends Migration
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
            '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}',
            [
                'modeloencuesta_id'=> $this->integer(11)->notNull(),
                'pregunta_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_8F0A84733CAF444E','{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}',['modeloencuesta_id'],false);
        $this->createIndex('IDX_8F0A847331A5801E','{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}',['pregunta_id'],false);
        $this->addPrimaryKey('pk_on_encuesta_modeloencuesta_pregunta_deshabilitadas','{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}',['modeloencuesta_id','pregunta_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_encuesta_modeloencuesta_pregunta_deshabilitadas','{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
        $this->dropIndex('IDX_8F0A84733CAF444E', '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
        $this->dropIndex('IDX_8F0A847331A5801E', '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
        $this->dropTable('{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
    }
}
