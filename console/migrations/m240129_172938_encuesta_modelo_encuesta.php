<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172938_encuesta_modelo_encuesta extends Migration
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
            '{{%encuesta_modelo_encuesta}}',
            [
                'id'=> $this->primaryKey(11),
                'nombreEncuesta'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_12A7426ACB7CAA2A','{{%encuesta_modelo_encuesta}}',['nombreEncuesta'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_12A7426ACB7CAA2A', '{{%encuesta_modelo_encuesta}}');
        $this->dropTable('{{%encuesta_modelo_encuesta}}');
    }
}
