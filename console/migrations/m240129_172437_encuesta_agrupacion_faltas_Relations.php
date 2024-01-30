<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172437_encuesta_agrupacion_faltas_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_agrupacion_faltas_falta_id1',
            '{{%encuesta_agrupacion_faltas}}','falta_id1',
            '{{%encuesta_falta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_encuesta_agrupacion_faltas_falta_id2',
            '{{%encuesta_agrupacion_faltas}}','falta_id2',
            '{{%encuesta_falta}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_agrupacion_faltas_falta_id1', '{{%encuesta_agrupacion_faltas}}');
        $this->dropForeignKey('fk_encuesta_agrupacion_faltas_falta_id2', '{{%encuesta_agrupacion_faltas}}');
    }
}
