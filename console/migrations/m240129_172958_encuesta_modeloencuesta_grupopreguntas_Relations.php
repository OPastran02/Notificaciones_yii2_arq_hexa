<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172958_encuesta_modeloencuesta_grupopreguntas_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_modeloencuesta_grupopreguntas_modeloencuesta_id',
            '{{%encuesta_modeloencuesta_grupopreguntas}}','modeloencuesta_id',
            '{{%encuesta_modelo_encuesta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_modeloencuesta_grupopreguntas_grupopreguntas_id',
            '{{%encuesta_modeloencuesta_grupopreguntas}}','grupopreguntas_id',
            '{{%encuesta_grupo_preguntas}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_modeloencuesta_grupopreguntas_modeloencuesta_id', '{{%encuesta_modeloencuesta_grupopreguntas}}');
        $this->dropForeignKey('fk_encuesta_modeloencuesta_grupopreguntas_grupopreguntas_id', '{{%encuesta_modeloencuesta_grupopreguntas}}');
    }
}
