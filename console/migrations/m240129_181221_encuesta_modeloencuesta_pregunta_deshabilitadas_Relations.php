<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181221_encuesta_modeloencuesta_pregunta_deshabilitadas_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_modeloencuesta_pregunta_deshabilitadas_pregunta_id',
            '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}','pregunta_id',
            '{{%encuesta_pregunta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_modeloencuesta_pregunta_deshabilitadas_modeloencuesta_id',
            '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}','modeloencuesta_id',
            '{{%encuesta_modelo_encuesta}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_modeloencuesta_pregunta_deshabilitadas_pregunta_id', '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
        $this->dropForeignKey('fk_encuesta_modeloencuesta_pregunta_deshabilitadas_modeloencuesta_id', '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}');
    }
}
