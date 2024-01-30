<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155101_resultadosultimainspeccion_tipotratamiento_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_resultadosultimainspeccion_tipotratamiento_tipoTratamiento_id',
            '{{%resultadosultimainspeccion_tipotratamiento}}','tipoTratamiento_id',
            '{{%tipo_tratamiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_resultadosultimainspeccion_tipotratamiento_resultadosUltimaInspeccion_id',
            '{{%resultadosultimainspeccion_tipotratamiento}}','resultadosUltimaInspeccion_id',
            '{{%resultados_ultima_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_resultadosultimainspeccion_tipotratamiento_tipoTratamiento_id', '{{%resultadosultimainspeccion_tipotratamiento}}');
        $this->dropForeignKey('fk_resultadosultimainspeccion_tipotratamiento_resultadosUltimaInspeccion_id', '{{%resultadosultimainspeccion_tipotratamiento}}');
    }
}
