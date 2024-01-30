<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182753_encuesta_siguiente_pregunta_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_siguiente_pregunta_requisitosiguiente_id',
            '{{%encuesta_siguiente_pregunta}}','requisitosiguiente_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_siguiente_pregunta_requisitoorigen_id',
            '{{%encuesta_siguiente_pregunta}}','requisitoorigen_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_siguiente_pregunta_requisitosiguiente_id', '{{%encuesta_siguiente_pregunta}}');
        $this->dropForeignKey('fk_encuesta_siguiente_pregunta_requisitoorigen_id', '{{%encuesta_siguiente_pregunta}}');
    }
}
