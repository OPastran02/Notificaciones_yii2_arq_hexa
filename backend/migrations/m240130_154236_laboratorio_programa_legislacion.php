<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154236_laboratorio_programa_legislacion extends Migration
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
            '{{%laboratorio_programa_legislacion}}',
            [
                'programa_id'=> $this->integer(11)->notNull(),
                'legislacion_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_1F29522DFD8A7328','{{%laboratorio_programa_legislacion}}',['programa_id'],false);
        $this->createIndex('IDX_1F29522D644ABBDE','{{%laboratorio_programa_legislacion}}',['legislacion_id'],false);
        $this->addPrimaryKey('pk_on_laboratorio_programa_legislacion','{{%laboratorio_programa_legislacion}}',['programa_id','legislacion_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_laboratorio_programa_legislacion','{{%laboratorio_programa_legislacion}}');
        $this->dropIndex('IDX_1F29522DFD8A7328', '{{%laboratorio_programa_legislacion}}');
        $this->dropIndex('IDX_1F29522D644ABBDE', '{{%laboratorio_programa_legislacion}}');
        $this->dropTable('{{%laboratorio_programa_legislacion}}');
    }
}
