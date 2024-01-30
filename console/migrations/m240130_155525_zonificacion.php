<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155525_zonificacion extends Migration
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
            '{{%zonificacion}}',
            [
                'id'=> $this->primaryKey(11),
                'zonificacion'=> $this->string(45)->notNull(),
                'ASATIPO'=> $this->string(10)->null()->defaultValue(null),
                'ASAETIPO'=> $this->string(10)->null()->defaultValue(null),
                'DIURNO_HABITABLE'=> $this->integer(11)->null()->defaultValue(null),
                'DIURNO_SERVICIO'=> $this->integer(11)->null()->defaultValue(null),
                'NOCTURNO_HABITABLE'=> $this->integer(11)->null()->defaultValue(null),
                'NOCTURNO_SERVICIO'=> $this->integer(11)->null()->defaultValue(null),
                'DIURNO_EXTERIOR'=> $this->integer(11)->null()->defaultValue(null),
                'NOCTURNO_EXTERIOR'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('id_UNIQUE','{{%zonificacion}}',['id'],true);
        $this->createIndex('zonificacioncol_UNIQUE','{{%zonificacion}}',['zonificacion'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('id_UNIQUE', '{{%zonificacion}}');
        $this->dropIndex('zonificacioncol_UNIQUE', '{{%zonificacion}}');
        $this->dropTable('{{%zonificacion}}');
    }
}
