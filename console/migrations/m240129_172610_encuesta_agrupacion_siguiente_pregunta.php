<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172610_encuesta_agrupacion_siguiente_pregunta extends Migration
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
            '{{%encuesta_agrupacion_siguiente_pregunta}}',
            [
                'siguientpregunta_id1'=> $this->integer(11)->notNull(),
                'siguientepregunta_id2'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_86764130E6316FE4','{{%encuesta_agrupacion_siguiente_pregunta}}',['siguientpregunta_id1'],false);
        $this->createIndex('IDX_867641304C68AFDA','{{%encuesta_agrupacion_siguiente_pregunta}}',['siguientepregunta_id2'],false);
        $this->addPrimaryKey('pk_on_encuesta_agrupacion_siguiente_pregunta','{{%encuesta_agrupacion_siguiente_pregunta}}',['siguientpregunta_id1','siguientepregunta_id2']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_encuesta_agrupacion_siguiente_pregunta','{{%encuesta_agrupacion_siguiente_pregunta}}');
        $this->dropIndex('IDX_86764130E6316FE4', '{{%encuesta_agrupacion_siguiente_pregunta}}');
        $this->dropIndex('IDX_867641304C68AFDA', '{{%encuesta_agrupacion_siguiente_pregunta}}');
        $this->dropTable('{{%encuesta_agrupacion_siguiente_pregunta}}');
    }
}
