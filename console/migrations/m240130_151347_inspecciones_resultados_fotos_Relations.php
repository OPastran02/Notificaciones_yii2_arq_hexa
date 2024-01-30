<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151347_inspecciones_resultados_fotos_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_inspecciones_resultados_fotos_resultado_id',
            '{{%inspecciones_resultados_fotos}}','resultado_id',
            '{{%inspecciones_resultados}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_inspecciones_resultados_fotos_resultado_id', '{{%inspecciones_resultados_fotos}}');
    }
}
