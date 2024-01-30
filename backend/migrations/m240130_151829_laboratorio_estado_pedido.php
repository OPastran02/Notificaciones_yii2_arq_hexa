<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151829_laboratorio_estado_pedido extends Migration
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
            '{{%laboratorio_estado_pedido}}',
            [
                'id'=> $this->primaryKey(11),
                'estado'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_B5656006265DE1E3','{{%laboratorio_estado_pedido}}',['estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_B5656006265DE1E3', '{{%laboratorio_estado_pedido}}');
        $this->dropTable('{{%laboratorio_estado_pedido}}');
    }
}
