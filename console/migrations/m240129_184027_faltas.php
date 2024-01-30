<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_184027_faltas extends Migration
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
            '{{%faltas}}',
            [
                'idfaltas'=> $this->primaryKey(11),
                'orden_inspeccion'=> $this->integer(11)->null()->defaultValue(null),
                'pregunta'=> $this->text()->null()->defaultValue(null),
                'falta'=> $this->text()->null()->defaultValue(null),
                'tipo_pregunta'=> $this->text()->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%faltas}}');
    }
}
