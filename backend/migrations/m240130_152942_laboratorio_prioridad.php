<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152942_laboratorio_prioridad extends Migration
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
            '{{%laboratorio_prioridad}}',
            [
                'id'=> $this->primaryKey(11),
                'prioridad'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_81E00BE2A3886252','{{%laboratorio_prioridad}}',['prioridad'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_81E00BE2A3886252', '{{%laboratorio_prioridad}}');
        $this->dropTable('{{%laboratorio_prioridad}}');
    }
}
