<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151312_inspecciones_resultados_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_inspecciones_resultados_pregunta_id',
            '{{%inspecciones_resultados}}','pregunta_id',
            '{{%encuesta_pregunta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_inspecciones_resultados_grupo_id',
            '{{%inspecciones_resultados}}','grupo_id',
            '{{%encuesta_grupo_preguntas}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_inspecciones_resultados_orden_inspeccion_id',
            '{{%inspecciones_resultados}}','orden_inspeccion_id',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_inspecciones_resultados_pregunta_id', '{{%inspecciones_resultados}}');
        $this->dropForeignKey('fk_inspecciones_resultados_grupo_id', '{{%inspecciones_resultados}}');
        $this->dropForeignKey('fk_inspecciones_resultados_orden_inspeccion_id', '{{%inspecciones_resultados}}');
    }
}
