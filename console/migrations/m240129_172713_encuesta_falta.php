<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172713_encuesta_falta extends Migration
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
            '{{%encuesta_falta}}',
            [
                'id'=> $this->primaryKey(11),
                'grupo_id'=> $this->integer(11)->null()->defaultValue(null),
                'flata'=> $this->string(255)->notNull(),
                'texto_falta'=> $this->string(500)->notNull(),
                'clausura'=> $this->tinyInteger(1)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_5E4991EA9C833003','{{%encuesta_falta}}',['grupo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_5E4991EA9C833003', '{{%encuesta_falta}}');
        $this->dropTable('{{%encuesta_falta}}');
    }
}
