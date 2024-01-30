<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_170316_actuacion extends Migration
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
            '{{%actuacion}}',
            [
                'tipo_id'=> $this->integer(11)->notNull(),
                'numero'=> $this->integer(11)->notNull(),
                'reparticion_id'=> $this->integer(11)->notNull(),
                'anio'=> $this->integer(11)->notNull(),
                'Id_Establecimiento'=> $this->integer(11)->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'clasificacion_actuacion_id'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_321583D3A8799458','{{%actuacion}}',['Id_Establecimiento'],false);
        $this->createIndex('IDX_321583D3A9276E6C','{{%actuacion}}',['tipo_id'],false);
        $this->createIndex('IDX_321583D3201FA7E6','{{%actuacion}}',['reparticion_id'],false);
        $this->createIndex('clasificacion_actuacion_id','{{%actuacion}}',['clasificacion_actuacion_id'],false);
        $this->addPrimaryKey('pk_on_actuacion','{{%actuacion}}',['tipo_id','numero','reparticion_id','anio']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_actuacion','{{%actuacion}}');
        $this->dropIndex('IDX_321583D3A8799458', '{{%actuacion}}');
        $this->dropIndex('IDX_321583D3A9276E6C', '{{%actuacion}}');
        $this->dropIndex('IDX_321583D3201FA7E6', '{{%actuacion}}');
        $this->dropIndex('clasificacion_actuacion_id', '{{%actuacion}}');
        $this->dropTable('{{%actuacion}}');
    }
}
