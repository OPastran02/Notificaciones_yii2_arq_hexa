<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154926_resultados_ultima_inspeccion extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%resultados_ultima_inspeccion}}',
            [
                'id'=> $this->primaryKey(11),
                'estado326_id'=> $this->integer(11)->null()->defaultValue(null),
                'tramite_efluentes_id'=> $this->integer(11)->null()->defaultValue(null),
                'destino_vuelco_efluentes_id'=> $this->integer(11)->null()->defaultValue(null),
                'proximaInspeccion'=> $this->date()->null()->defaultValue(null),
                'inspeccionarCara'=> $this->smallInteger(6)->null()->defaultValue(null),
                'superficieCubierta'=> $this->double()->null()->defaultValue(null),
                'superficieTotal'=> $this->double()->null()->defaultValue(null),
                'inscripto326'=> $this->string(2)->null()->defaultValue(null),
                'cantTanques'=> $this->smallInteger(6)->null()->defaultValue(null),
                'tanquesActivos'=> $this->smallInteger(6)->null()->defaultValue(null),
                'tanquesCegadosInertizados'=> $this->smallInteger(6)->null()->defaultValue(null),
                'tanquesErradicados'=> $this->smallInteger(6)->null()->defaultValue(null),
                'curl'=> $this->bigInteger(20)->null()->defaultValue(null),
                'generaEfluentesLiquidosInd'=> $this->string(2)->null()->defaultValue(null),
                'caudalVuelcoMax'=> $this->double()->null()->defaultValue(null),
                'horaVuelvoInicial'=> $this->time()->null()->defaultValue(null),
                'horaVuelcoFinal'=> $this->time()->null()->defaultValue(null),
                'tramiteEfluentesEstado'=> $this->string(2)->null()->defaultValue(null),
                'reCirculacionAgua'=> $this->string(2)->null()->defaultValue(null),
                'CTMMC'=> $this->string(2)->null()->defaultValue(null),
                'realizaTratamientoEfluentesPrevioVuelco'=> $this->string(2)->null()->defaultValue(null),
                'generaBarros'=> $this->string(2)->null()->defaultValue(null),
                'protocoloVuelcaLimitesPermitidos'=> $this->string(2)->null()->defaultValue(null),
                'muestreoLaboratorio'=> $this->string(2)->null()->defaultValue(null),
                'resultadosLaboratorioLimitesPermisibles'=> $this->string(2)->null()->defaultValue(null),
                'videoInspeccionoUIT'=> $this->string(2)->null()->defaultValue(null),
                'establecimiento_id'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_1594D2E3E01B4D','{{%resultados_ultima_inspeccion}}',['curl'],true);
        $this->createIndex('UNIQ_1594D2E71B61351','{{%resultados_ultima_inspeccion}}',['establecimiento_id'],true);
        $this->createIndex('IDX_1594D2E244EEE77','{{%resultados_ultima_inspeccion}}',['estado326_id'],false);
        $this->createIndex('IDX_1594D2EBECA21CA','{{%resultados_ultima_inspeccion}}',['tramite_efluentes_id'],false);
        $this->createIndex('IDX_1594D2EB53C3B70','{{%resultados_ultima_inspeccion}}',['destino_vuelco_efluentes_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_1594D2E3E01B4D', '{{%resultados_ultima_inspeccion}}');
        $this->dropIndex('UNIQ_1594D2E71B61351', '{{%resultados_ultima_inspeccion}}');
        $this->dropIndex('IDX_1594D2E244EEE77', '{{%resultados_ultima_inspeccion}}');
        $this->dropIndex('IDX_1594D2EBECA21CA', '{{%resultados_ultima_inspeccion}}');
        $this->dropIndex('IDX_1594D2EB53C3B70', '{{%resultados_ultima_inspeccion}}');
        $this->dropTable('{{%resultados_ultima_inspeccion}}');
    }
}
