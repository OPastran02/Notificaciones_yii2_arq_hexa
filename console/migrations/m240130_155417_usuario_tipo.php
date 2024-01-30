<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155417_usuario_tipo extends Migration
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
            '{{%usuario_tipo}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo_usuario'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_19576757319C91FD','{{%usuario_tipo}}',['tipo_usuario'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_19576757319C91FD', '{{%usuario_tipo}}');
        $this->dropTable('{{%usuario_tipo}}');
    }
}
