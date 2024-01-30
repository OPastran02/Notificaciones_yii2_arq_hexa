<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181514_encuesta_pregunta extends Migration
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
            '{{%encuesta_pregunta}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo_id'=> $this->integer(11)->null()->defaultValue(null),
                'pregunta'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_3C1707EEA9276E6C','{{%encuesta_pregunta}}',['tipo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_3C1707EEA9276E6C', '{{%encuesta_pregunta}}');
        $this->dropTable('{{%encuesta_pregunta}}');
    }
}
