<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165108_acta_asignacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_acta_asignacion_acta_id',
            '{{%acta_asignacion}}','acta_id',
            '{{%acta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_acta_asignacion_inspector_id',
            '{{%acta_asignacion}}','inspector_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_acta_asignacion_acta_id', '{{%acta_asignacion}}');
        $this->dropForeignKey('fk_acta_asignacion_inspector_id', '{{%acta_asignacion}}');
    }
}
