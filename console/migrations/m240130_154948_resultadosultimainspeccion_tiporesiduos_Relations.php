<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154948_resultadosultimainspeccion_tiporesiduos_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_resultadosultimainspeccion_tiporesiduos_tipoResiduo_id',
            '{{%resultadosultimainspeccion_tiporesiduos}}','tipoResiduo_id',
            '{{%tipo_residuos}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_resultadosultimainspeccion_tiporesiduos_resultadosUltimaInspeccion_id',
            '{{%resultadosultimainspeccion_tiporesiduos}}','resultadosUltimaInspeccion_id',
            '{{%resultados_ultima_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_resultadosultimainspeccion_tiporesiduos_tipoResiduo_id', '{{%resultadosultimainspeccion_tiporesiduos}}');
        $this->dropForeignKey('fk_resultadosultimainspeccion_tiporesiduos_resultadosUltimaInspeccion_id', '{{%resultadosultimainspeccion_tiporesiduos}}');
    }
}
