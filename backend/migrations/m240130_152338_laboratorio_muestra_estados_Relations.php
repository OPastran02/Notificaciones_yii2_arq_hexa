<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152338_laboratorio_muestra_estados_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_muestra_estados_muestra_id',
            '{{%laboratorio_muestra_estados}}','muestra_id',
            '{{%laboratorio_muestra}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_muestra_estados_estado_id',
            '{{%laboratorio_muestra_estados}}','estado_id',
            '{{%laboratoio_estado_muestra}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_muestra_estados_area_id',
            '{{%laboratorio_muestra_estados}}','area_id',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_muestra_estados_muestra_id', '{{%laboratorio_muestra_estados}}');
        $this->dropForeignKey('fk_laboratorio_muestra_estados_estado_id', '{{%laboratorio_muestra_estados}}');
        $this->dropForeignKey('fk_laboratorio_muestra_estados_area_id', '{{%laboratorio_muestra_estados}}');
    }
}
