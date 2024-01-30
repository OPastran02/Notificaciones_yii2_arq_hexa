<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182935_encuesta_tipo_pregunta extends Migration
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
            '{{%encuesta_tipo_pregunta}}',
            [
                'id'=> $this->primaryKey(11),
                'tipoPregunta'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_153DDDE43027437C','{{%encuesta_tipo_pregunta}}',['tipoPregunta'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_153DDDE43027437C', '{{%encuesta_tipo_pregunta}}');
        $this->dropTable('{{%encuesta_tipo_pregunta}}');
    }
}
