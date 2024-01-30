<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182716_encuesta_respuestas extends Migration
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
            '{{%encuesta_respuestas}}',
            [
                'id'=> $this->primaryKey(11),
                'Respuesta'=> $this->string(255)->notNull(),
                'originalId'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_8EB91213EE9F474D','{{%encuesta_respuestas}}',['Respuesta'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_8EB91213EE9F474D', '{{%encuesta_respuestas}}');
        $this->dropTable('{{%encuesta_respuestas}}');
    }
}
