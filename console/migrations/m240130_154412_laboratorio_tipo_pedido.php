<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154412_laboratorio_tipo_pedido extends Migration
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
            '{{%laboratorio_tipo_pedido}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_81FEB5FA702D1D47','{{%laboratorio_tipo_pedido}}',['tipo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_81FEB5FA702D1D47', '{{%laboratorio_tipo_pedido}}');
        $this->dropTable('{{%laboratorio_tipo_pedido}}');
    }
}
