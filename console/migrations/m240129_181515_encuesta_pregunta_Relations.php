<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181515_encuesta_pregunta_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_pregunta_tipo_id',
            '{{%encuesta_pregunta}}','tipo_id',
            '{{%encuesta_tipo_pregunta}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_pregunta_tipo_id', '{{%encuesta_pregunta}}');
    }
}
