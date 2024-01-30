<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155245_tabla_temporario_id_resultados extends Migration
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
            '{{%tabla_temporario_id_resultados}}',
            [
                'id'=> $this->integer(11)->null()->defaultValue(null),
                'orden_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'pregunta_id'=> $this->integer(11)->null()->defaultValue(null),
                'grupo_id'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%tabla_temporario_id_resultados}}');
    }
}
