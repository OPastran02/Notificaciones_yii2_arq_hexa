<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151600_laboratorio_determinacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_determinacion_area_id',
            '{{%laboratorio_determinacion}}','area_id',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_determinacion_area_id', '{{%laboratorio_determinacion}}');
    }
}
