<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_170317_actuacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_actuacion_reparticion_id',
            '{{%actuacion}}','reparticion_id',
            '{{%reparticion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_actuacion_Id_Establecimiento',
            '{{%actuacion}}','Id_Establecimiento',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_actuacion_tipo_id',
            '{{%actuacion}}','tipo_id',
            '{{%tipo_actuacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_actuacion_clasificacion_actuacion_id',
            '{{%actuacion}}','clasificacion_actuacion_id',
            '{{%actuacion_clasificacion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_actuacion_reparticion_id', '{{%actuacion}}');
        $this->dropForeignKey('fk_actuacion_Id_Establecimiento', '{{%actuacion}}');
        $this->dropForeignKey('fk_actuacion_tipo_id', '{{%actuacion}}');
        $this->dropForeignKey('fk_actuacion_clasificacion_actuacion_id', '{{%actuacion}}');
    }
}
