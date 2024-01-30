<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_153941_laboratorio_programa extends Migration
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
            '{{%laboratorio_programa}}',
            [
                'id'=> $this->primaryKey(11),
                'Programa'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_688F1DBBFB86765B','{{%laboratorio_programa}}',['Programa'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_688F1DBBFB86765B', '{{%laboratorio_programa}}');
        $this->dropTable('{{%laboratorio_programa}}');
    }
}
