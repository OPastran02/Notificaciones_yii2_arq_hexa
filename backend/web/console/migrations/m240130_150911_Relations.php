<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_150911_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_inspeccion_orden_inspeccion_id',
            '{{%inspeccion}}','orden_inspeccion_id',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_inspeccion_orden_inspeccion_id', '{{%inspeccion}}');
    }
}
