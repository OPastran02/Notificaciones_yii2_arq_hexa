<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171835_denunciante extends Migration
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
            '{{%denunciante}}',
            [
                'id'=> $this->primaryKey(11),
                'orden_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'nombre'=> $this->string(50)->null()->defaultValue(null),
                'apellido'=> $this->string(50)->null()->defaultValue(null),
                'direccion'=> $this->string(255)->null()->defaultValue(null),
                'telefono'=> $this->string(100)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_BAC65EB9FEA2F1E6','{{%denunciante}}',['orden_inspeccion_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_BAC65EB9FEA2F1E6', '{{%denunciante}}');
        $this->dropTable('{{%denunciante}}');
    }
}
