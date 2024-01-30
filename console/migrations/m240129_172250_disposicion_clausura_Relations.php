<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172250_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_disposicion_clausura_alcance_id',
            '{{%disposicion_clausura}}','alcance_id',
            '{{%faja_tipo_clausura}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_clausura_controlador_id',
            '{{%disposicion_clausura}}','controlador_id',
            '{{%controladores}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_clausura_id',
            '{{%disposicion_clausura}}','id',
            '{{%disposicion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_clausura_tipo_actuacion_remicion_id',
            '{{%disposicion_clausura}}','tipo_actuacion_remicion_id',
            '{{%tipo_actuacion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_disposicion_clausura_alcance_id', '{{%disposicion_clausura}}');
        $this->dropForeignKey('fk_disposicion_clausura_controlador_id', '{{%disposicion_clausura}}');
        $this->dropForeignKey('fk_disposicion_clausura_id', '{{%disposicion_clausura}}');
        $this->dropForeignKey('fk_disposicion_clausura_tipo_actuacion_remicion_id', '{{%disposicion_clausura}}');
    }
}
