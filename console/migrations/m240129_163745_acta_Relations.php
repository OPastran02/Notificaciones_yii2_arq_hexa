<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_163745_acta_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_acta_id_inspeccion',
            '{{%acta}}','id_inspeccion',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_acta_estado_id',
            '{{%acta}}','estado_id',
            '{{%acta_estado}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_acta_id_inspeccion', '{{%acta}}');
        $this->dropForeignKey('fk_acta_estado_id', '{{%acta}}');
    }
}
