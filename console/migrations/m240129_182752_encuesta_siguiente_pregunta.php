<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182752_encuesta_siguiente_pregunta extends Migration
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
            '{{%encuesta_siguiente_pregunta}}',
            [
                'id'=> $this->primaryKey(11),
                'requisitoorigen_id'=> $this->integer(11)->null()->defaultValue(null),
                'requisitosiguiente_id'=> $this->integer(11)->null()->defaultValue(null),
                'validacion'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_5783942AE33B0FFE','{{%encuesta_siguiente_pregunta}}',['requisitoorigen_id'],false);
        $this->createIndex('IDX_5783942A4DF076BF','{{%encuesta_siguiente_pregunta}}',['requisitosiguiente_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_5783942AE33B0FFE', '{{%encuesta_siguiente_pregunta}}');
        $this->dropIndex('IDX_5783942A4DF076BF', '{{%encuesta_siguiente_pregunta}}');
        $this->dropTable('{{%encuesta_siguiente_pregunta}}');
    }
}
