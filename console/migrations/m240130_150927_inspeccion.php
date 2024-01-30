<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_150927_inspeccion extends Migration
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
            '{{%inspeccion}}',
            [
                'id'=> $this->primaryKey(11),
                'orden_inspeccion_id'=> $this->integer(11)->notNull(),
                'fecha_programado'=> $this->date()->null()->defaultValue(null),
                'fecha_inspeccion'=> $this->datetime()->null()->defaultValue(null),
                'fecha_recepcion'=> $this->date()->null()->defaultValue(null),
                'Fecha_Creado'=> $this->datetime()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->datetime()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_343F5BA3FEA2F1E6','{{%inspeccion}}',['orden_inspeccion_id'],false);
        $this->createIndex('idx_inspeccion_fecha_inspeccion','{{%inspeccion}}',['fecha_inspeccion'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_343F5BA3FEA2F1E6', '{{%inspeccion}}');
        $this->dropIndex('idx_inspeccion_fecha_inspeccion', '{{%inspeccion}}');
        $this->dropTable('{{%inspeccion}}');
    }
}
