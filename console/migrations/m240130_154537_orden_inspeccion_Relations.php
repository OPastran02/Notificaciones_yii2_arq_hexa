<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154537_orden_inspeccion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_orden_inspeccion_modelo_check_list_id',
            '{{%orden_inspeccion}}','modelo_check_list_id',
            '{{%encuesta_modelo_encuesta}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_orden_inspeccion_circuito_id',
            '{{%orden_inspeccion}}','circuito_id',
            '{{%circuito}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_orden_inspeccion_establecimiento_id',
            '{{%orden_inspeccion}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_orden_inspeccion_area_id',
            '{{%orden_inspeccion}}','area_id',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_orden_inspeccion_motivo_inspeccion_id',
            '{{%orden_inspeccion}}','motivo_inspeccion_id',
            '{{%motivo_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_orden_inspeccion_modelo_check_list_id', '{{%orden_inspeccion}}');
        $this->dropForeignKey('fk_orden_inspeccion_circuito_id', '{{%orden_inspeccion}}');
        $this->dropForeignKey('fk_orden_inspeccion_establecimiento_id', '{{%orden_inspeccion}}');
        $this->dropForeignKey('fk_orden_inspeccion_area_id', '{{%orden_inspeccion}}');
        $this->dropForeignKey('fk_orden_inspeccion_motivo_inspeccion_id', '{{%orden_inspeccion}}');
    }
}
