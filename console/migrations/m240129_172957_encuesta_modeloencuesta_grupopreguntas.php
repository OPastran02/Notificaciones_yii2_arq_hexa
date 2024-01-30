<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172957_encuesta_modeloencuesta_grupopreguntas extends Migration
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
            '{{%encuesta_modeloencuesta_grupopreguntas}}',
            [
                'modeloencuesta_id'=> $this->integer(11)->notNull(),
                'grupopreguntas_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_2B89B7373CAF444E','{{%encuesta_modeloencuesta_grupopreguntas}}',['modeloencuesta_id'],false);
        $this->createIndex('IDX_2B89B73752F37722','{{%encuesta_modeloencuesta_grupopreguntas}}',['grupopreguntas_id'],false);
        $this->addPrimaryKey('pk_on_encuesta_modeloencuesta_grupopreguntas','{{%encuesta_modeloencuesta_grupopreguntas}}',['modeloencuesta_id','grupopreguntas_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_encuesta_modeloencuesta_grupopreguntas','{{%encuesta_modeloencuesta_grupopreguntas}}');
        $this->dropIndex('IDX_2B89B7373CAF444E', '{{%encuesta_modeloencuesta_grupopreguntas}}');
        $this->dropIndex('IDX_2B89B73752F37722', '{{%encuesta_modeloencuesta_grupopreguntas}}');
        $this->dropTable('{{%encuesta_modeloencuesta_grupopreguntas}}');
    }
}
