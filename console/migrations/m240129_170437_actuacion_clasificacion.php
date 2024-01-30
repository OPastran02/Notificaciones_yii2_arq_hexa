<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_170437_actuacion_clasificacion extends Migration
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
            '{{%actuacion_clasificacion}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('tipo','{{%actuacion_clasificacion}}',['tipo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('tipo', '{{%actuacion_clasificacion}}');
        $this->dropTable('{{%actuacion_clasificacion}}');
    }
}
