<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154536_orden_inspeccion extends Migration
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
            '{{%orden_inspeccion}}',
            [
                'id'=> $this->primaryKey(11),
                'modelo_check_list_id'=> $this->integer(11)->null()->defaultValue(null),
                'area_id'=> $this->smallInteger(6)->null()->defaultValue(null),
                'circuito_id'=> $this->integer(11)->null()->defaultValue(null),
                'establecimiento_id'=> $this->integer(11)->null()->defaultValue(null),
                'checklist'=> $this->integer(11)->null()->defaultValue(null),
                'id_sap'=> $this->integer(11)->null()->defaultValue(null),
                'observaciones'=> $this->string(2500)->null()->defaultValue(null),
                'anulada'=> $this->tinyInteger(1)->notNull(),
                'realizada'=> $this->tinyInteger(1)->notNull(),
                'Fecha_Creado'=> $this->datetime()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->datetime()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
                'eliminada'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'Id_Usuario_Eliminador'=> $this->integer(11)->null()->defaultValue(null),
                'generaPeligrosos'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'generaPatogenicos'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'generaAvus'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'generaEfluentesLiquidos'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'generaEmisionesGaseosas'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'inscriptoRac'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'tieneTanquesCombustible'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'inscriptoRegLavanderiaTintoreria'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'sinActividadImpactoAmbiental'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'ruido'=> $this->integer(11)->null()->defaultValue(null),
                'suaci'=> $this->string(11)->null()->defaultValue(null),
                'olores'=> $this->integer(11)->null()->defaultValue(null),
                'ctrlCedula'=> $this->integer(11)->null()->defaultValue(null),
                'motivo_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'observacionesMotivoInspeccion'=> $this->string(2500)->null()->defaultValue(null),
                'autorizacion'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'Id_Usuario_Autorizador'=> $this->integer(11)->null()->defaultValue(null),
                'completa'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'Fecha_Inspeccion_Completa'=> $this->datetime()->null()->defaultValue(null),
                'revisionTablet'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'cerradaAutomaticamente'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'Fecha_Cerrada_Automaticamente'=> $this->datetime()->null()->defaultValue(null),
                'reinspeccionar'=> $this->tinyInteger(1)->null()->defaultValue(0),
                'reinspeccionarUsuario'=> $this->integer(11)->null()->defaultValue(null),
                'reinspeccionProvenienciaOrdenInspeccion'=> $this->integer(11)->null()->defaultValue(null),
                'Primer_Fecha_Programado'=> $this->datetime()->null()->defaultValue(null),
                'ifGra'=> $this->string(100)->null()->defaultValue(null),
                'cumplioIntimacion'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'fechaInicioTablet'=> $this->datetime()->null()->defaultValue(null),
                'fechaFinTablet'=> $this->datetime()->null()->defaultValue(null),
                'vinculado'=> $this->tinyInteger(1)->null()->defaultValue(0),
                'revisionObs'=> $this->string(2500)->null()->defaultValue(null),
                'inspeccionPorTablet'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'Fecha_Vinculado'=> $this->datetime()->null()->defaultValue(null),
                'Checklist_blanco'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'cedulas_vencidas'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'clausuras_vigentes'=> $this->tinyInteger(1)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_8EF7068B58377CC8','{{%orden_inspeccion}}',['modelo_check_list_id'],false);
        $this->createIndex('IDX_8EF7068BBD0F409C','{{%orden_inspeccion}}',['area_id'],false);
        $this->createIndex('IDX_8EF7068B68CE3E02','{{%orden_inspeccion}}',['circuito_id'],false);
        $this->createIndex('IDX_8EF7068B71B61351','{{%orden_inspeccion}}',['establecimiento_id'],false);
        $this->createIndex('IDX_8EF7068BD8FC1BA7','{{%orden_inspeccion}}',['motivo_inspeccion_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_8EF7068B58377CC8', '{{%orden_inspeccion}}');
        $this->dropIndex('IDX_8EF7068BBD0F409C', '{{%orden_inspeccion}}');
        $this->dropIndex('IDX_8EF7068B68CE3E02', '{{%orden_inspeccion}}');
        $this->dropIndex('IDX_8EF7068B71B61351', '{{%orden_inspeccion}}');
        $this->dropIndex('IDX_8EF7068BD8FC1BA7', '{{%orden_inspeccion}}');
        $this->dropTable('{{%orden_inspeccion}}');
    }
}
