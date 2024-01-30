<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171900_destino_vuelco extends Migration
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
            '{{%destino_vuelco}}',
            [
                'id'=> $this->primaryKey(11),
                'destinoVuelco'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_1D9DCCB394FFB0B5','{{%destino_vuelco}}',['destinoVuelco'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_1D9DCCB394FFB0B5', '{{%destino_vuelco}}');
        $this->dropTable('{{%destino_vuelco}}');
    }
}
