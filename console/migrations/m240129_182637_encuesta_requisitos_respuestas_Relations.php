<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182637_encuesta_requisitos_respuestas_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_requisitos_respuestas_respuesta_id',
            '{{%encuesta_requisitos_respuestas}}','respuesta_id',
            '{{%encuesta_respuestas}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_requisitos_respuestas_requisito_id',
            '{{%encuesta_requisitos_respuestas}}','requisito_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_requisitos_respuestas_respuesta_id', '{{%encuesta_requisitos_respuestas}}');
        $this->dropForeignKey('fk_encuesta_requisitos_respuestas_requisito_id', '{{%encuesta_requisitos_respuestas}}');
    }
}
