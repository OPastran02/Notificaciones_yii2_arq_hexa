<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152337_laboratorio_muestra_estados extends Migration
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
            '{{%laboratorio_muestra_estados}}',
            [
                'muestra_id'=> $this->integer(11)->notNull(),
                'area_id'=> $this->smallInteger(6)->notNull(),
                'estado_id'=> $this->integer(11)->null()->defaultValue(null),
                'observaciones'=> $this->text()->null()->defaultValue(null),
                'conclusion'=> $this->text()->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_C88A664D31177579','{{%laboratorio_muestra_estados}}',['muestra_id'],false);
        $this->createIndex('IDX_C88A664DBD0F409C','{{%laboratorio_muestra_estados}}',['area_id'],false);
        $this->createIndex('IDX_C88A664D9F5A440B','{{%laboratorio_muestra_estados}}',['estado_id'],false);
        $this->addPrimaryKey('pk_on_laboratorio_muestra_estados','{{%laboratorio_muestra_estados}}',['muestra_id','area_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_laboratorio_muestra_estados','{{%laboratorio_muestra_estados}}');
        $this->dropIndex('IDX_C88A664D31177579', '{{%laboratorio_muestra_estados}}');
        $this->dropIndex('IDX_C88A664DBD0F409C', '{{%laboratorio_muestra_estados}}');
        $this->dropIndex('IDX_C88A664D9F5A440B', '{{%laboratorio_muestra_estados}}');
        $this->dropTable('{{%laboratorio_muestra_estados}}');
    }
}
