<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171706_controladores extends Migration
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
            '{{%controladores}}',
            [
                'id'=> $this->primaryKey(11),
                'reparticion_id'=> $this->integer(11)->null()->defaultValue(null),
                'nombre'=> $this->string(50)->notNull(),
                'apellido'=> $this->string(255)->notNull(),
                'numero'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_CAAF0D1F201FA7E6','{{%controladores}}',['reparticion_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_CAAF0D1F201FA7E6', '{{%controladores}}');
        $this->dropTable('{{%controladores}}');
    }
}
