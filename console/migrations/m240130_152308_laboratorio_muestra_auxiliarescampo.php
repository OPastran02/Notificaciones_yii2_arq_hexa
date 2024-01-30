<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152308_laboratorio_muestra_auxiliarescampo extends Migration
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
            '{{%laboratorio_muestra_auxiliarescampo}}',
            [
                'muestra_id'=> $this->integer(11)->notNull(),
                'usuario_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_D709B57C31177579','{{%laboratorio_muestra_auxiliarescampo}}',['muestra_id'],false);
        $this->createIndex('IDX_D709B57CDB38439E','{{%laboratorio_muestra_auxiliarescampo}}',['usuario_id'],false);
        $this->addPrimaryKey('pk_on_laboratorio_muestra_auxiliarescampo','{{%laboratorio_muestra_auxiliarescampo}}',['muestra_id','usuario_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_laboratorio_muestra_auxiliarescampo','{{%laboratorio_muestra_auxiliarescampo}}');
        $this->dropIndex('IDX_D709B57C31177579', '{{%laboratorio_muestra_auxiliarescampo}}');
        $this->dropIndex('IDX_D709B57CDB38439E', '{{%laboratorio_muestra_auxiliarescampo}}');
        $this->dropTable('{{%laboratorio_muestra_auxiliarescampo}}');
    }
}
