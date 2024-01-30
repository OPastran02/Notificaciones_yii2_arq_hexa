<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181817_encuesta_requisitos_pregunta_grupo_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_requisitos_pregunta_grupo_pregunta_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','pregunta_id',
            '{{%encuesta_pregunta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_requisitos_pregunta_grupo_grupo_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','grupo_id',
            '{{%encuesta_grupo_preguntas}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_requisitos_pregunta_grupo_pregunta_id', '{{%encuesta_requisitos_pregunta_grupo}}');
        $this->dropForeignKey('fk_encuesta_requisitos_pregunta_grupo_grupo_id', '{{%encuesta_requisitos_pregunta_grupo}}');
    }
}
