<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183649_faja_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_faja_id_area',
            '{{%faja}}','id_area',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_faja_id_estado',
            '{{%faja}}','id_estado',
            '{{%faja_estado}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_faja_id_inspeccion',
            '{{%faja}}','id_inspeccion',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_faja_id_tipo_clausura',
            '{{%faja}}','id_tipo_clausura',
            '{{%faja_tipo_clausura}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_faja_id_area', '{{%faja}}');
        $this->dropForeignKey('fk_faja_id_estado', '{{%faja}}');
        $this->dropForeignKey('fk_faja_id_inspeccion', '{{%faja}}');
        $this->dropForeignKey('fk_faja_id_tipo_clausura', '{{%faja}}');
    }
}
