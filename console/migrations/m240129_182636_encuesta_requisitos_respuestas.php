<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_182636_encuesta_requisitos_respuestas extends Migration
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
            '{{%encuesta_requisitos_respuestas}}',
            [
                'requisito_id'=> $this->integer(11)->notNull(),
                'respuesta_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_F798A351FA50198E','{{%encuesta_requisitos_respuestas}}',['requisito_id'],false);
        $this->createIndex('IDX_F798A351D9BA57A2','{{%encuesta_requisitos_respuestas}}',['respuesta_id'],false);
        $this->addPrimaryKey('pk_on_encuesta_requisitos_respuestas','{{%encuesta_requisitos_respuestas}}',['requisito_id','respuesta_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_encuesta_requisitos_respuestas','{{%encuesta_requisitos_respuestas}}');
        $this->dropIndex('IDX_F798A351FA50198E', '{{%encuesta_requisitos_respuestas}}');
        $this->dropIndex('IDX_F798A351D9BA57A2', '{{%encuesta_requisitos_respuestas}}');
        $this->dropTable('{{%encuesta_requisitos_respuestas}}');
    }
}
