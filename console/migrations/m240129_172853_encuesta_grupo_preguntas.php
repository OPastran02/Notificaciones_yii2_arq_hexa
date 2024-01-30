<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172853_encuesta_grupo_preguntas extends Migration
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
            '{{%encuesta_grupo_preguntas}}',
            [
                'id'=> $this->primaryKey(11),
                'nombreGrupo'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_C3917B5DE088E3B','{{%encuesta_grupo_preguntas}}',['nombreGrupo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_C3917B5DE088E3B', '{{%encuesta_grupo_preguntas}}');
        $this->dropTable('{{%encuesta_grupo_preguntas}}');
    }
}
