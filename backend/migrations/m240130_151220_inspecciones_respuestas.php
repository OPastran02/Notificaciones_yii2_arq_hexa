<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151220_inspecciones_respuestas extends Migration
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
            '{{%inspecciones_respuestas}}',
            [
                'resultado_id'=> $this->integer(11)->notNull(),
                'respuesta_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_22DD3258FF51ECB6','{{%inspecciones_respuestas}}',['resultado_id'],false);
        $this->createIndex('IDX_22DD3258D9BA57A2','{{%inspecciones_respuestas}}',['respuesta_id'],false);
        $this->addPrimaryKey('pk_on_inspecciones_respuestas','{{%inspecciones_respuestas}}',['resultado_id','respuesta_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_inspecciones_respuestas','{{%inspecciones_respuestas}}');
        $this->dropIndex('IDX_22DD3258FF51ECB6', '{{%inspecciones_respuestas}}');
        $this->dropIndex('IDX_22DD3258D9BA57A2', '{{%inspecciones_respuestas}}');
        $this->dropTable('{{%inspecciones_respuestas}}');
    }
}
