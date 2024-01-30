<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151221_inspecciones_respuestas_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_inspecciones_respuestas_respuesta_id',
            '{{%inspecciones_respuestas}}','respuesta_id',
            '{{%encuesta_respuestas}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_inspecciones_respuestas_resultado_id',
            '{{%inspecciones_respuestas}}','resultado_id',
            '{{%inspecciones_resultados}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_inspecciones_respuestas_respuesta_id', '{{%inspecciones_respuestas}}');
        $this->dropForeignKey('fk_inspecciones_respuestas_resultado_id', '{{%inspecciones_respuestas}}');
    }
}
