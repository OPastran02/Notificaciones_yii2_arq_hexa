<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_181816_encuesta_requisitos_pregunta_grupo extends Migration
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
            '{{%encuesta_requisitos_pregunta_grupo}}',
            [
                'id'=> $this->primaryKey(11),
                'grupo_id'=> $this->integer(11)->null()->defaultValue(null),
                'pregunta_id'=> $this->integer(11)->null()->defaultValue(null),
                'MostrarInicio'=> $this->tinyInteger(1)->notNull(),
                'Obligatorio'=> $this->tinyInteger(1)->notNull(),
                'RequiereFoto'=> $this->tinyInteger(1)->notNull(),
                'validacion'=> $this->string(255)->notNull(),
                'orden'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('grupo_pregunta_unique','{{%encuesta_requisitos_pregunta_grupo}}',['grupo_id','pregunta_id'],true);
        $this->createIndex('IDX_28207A959C833003','{{%encuesta_requisitos_pregunta_grupo}}',['grupo_id'],false);
        $this->createIndex('IDX_28207A9531A5801E','{{%encuesta_requisitos_pregunta_grupo}}',['pregunta_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('grupo_pregunta_unique', '{{%encuesta_requisitos_pregunta_grupo}}');
        $this->dropIndex('IDX_28207A959C833003', '{{%encuesta_requisitos_pregunta_grupo}}');
        $this->dropIndex('IDX_28207A9531A5801E', '{{%encuesta_requisitos_pregunta_grupo}}');
        $this->dropTable('{{%encuesta_requisitos_pregunta_grupo}}');
    }
}
