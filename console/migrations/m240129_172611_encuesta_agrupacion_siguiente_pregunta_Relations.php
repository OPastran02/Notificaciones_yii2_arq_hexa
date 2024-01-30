<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172611_encuesta_agrupacion_siguiente_pregunta_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_agrupacion_siguiente_pregunta_siguientepregunta_id2',
            '{{%encuesta_agrupacion_siguiente_pregunta}}','siguientepregunta_id2',
            '{{%encuesta_siguiente_pregunta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_agrupacion_siguiente_pregunta_siguientpregunta_id1',
            '{{%encuesta_agrupacion_siguiente_pregunta}}','siguientpregunta_id1',
            '{{%encuesta_siguiente_pregunta}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_agrupacion_siguiente_pregunta_siguientepregunta_id2', '{{%encuesta_agrupacion_siguiente_pregunta}}');
        $this->dropForeignKey('fk_encuesta_agrupacion_siguiente_pregunta_siguientpregunta_id1', '{{%encuesta_agrupacion_siguiente_pregunta}}');
    }
}
