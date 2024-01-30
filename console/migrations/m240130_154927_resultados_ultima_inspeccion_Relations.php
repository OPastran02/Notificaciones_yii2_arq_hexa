<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154927_resultados_ultima_inspeccion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_resultados_ultima_inspeccion_estado326_id',
            '{{%resultados_ultima_inspeccion}}','estado326_id',
            '{{%estado_res326}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_resultados_ultima_inspeccion_establecimiento_id',
            '{{%resultados_ultima_inspeccion}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_resultados_ultima_inspeccion_destino_vuelco_efluentes_id',
            '{{%resultados_ultima_inspeccion}}','destino_vuelco_efluentes_id',
            '{{%destino_vuelco}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_resultados_ultima_inspeccion_tramite_efluentes_id',
            '{{%resultados_ultima_inspeccion}}','tramite_efluentes_id',
            '{{%tramite_efluentes}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_resultados_ultima_inspeccion_estado326_id', '{{%resultados_ultima_inspeccion}}');
        $this->dropForeignKey('fk_resultados_ultima_inspeccion_establecimiento_id', '{{%resultados_ultima_inspeccion}}');
        $this->dropForeignKey('fk_resultados_ultima_inspeccion_destino_vuelco_efluentes_id', '{{%resultados_ultima_inspeccion}}');
        $this->dropForeignKey('fk_resultados_ultima_inspeccion_tramite_efluentes_id', '{{%resultados_ultima_inspeccion}}');
    }
}
