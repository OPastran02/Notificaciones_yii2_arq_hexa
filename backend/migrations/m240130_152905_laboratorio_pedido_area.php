<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152905_laboratorio_pedido_area extends Migration
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
            '{{%laboratorio_pedido_area}}',
            [
                'pedido_id'=> $this->integer(11)->notNull(),
                'area_id'=> $this->smallInteger(6)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_76237D284854653A','{{%laboratorio_pedido_area}}',['pedido_id'],false);
        $this->createIndex('IDX_76237D28BD0F409C','{{%laboratorio_pedido_area}}',['area_id'],false);
        $this->addPrimaryKey('pk_on_laboratorio_pedido_area','{{%laboratorio_pedido_area}}',['pedido_id','area_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_laboratorio_pedido_area','{{%laboratorio_pedido_area}}');
        $this->dropIndex('IDX_76237D284854653A', '{{%laboratorio_pedido_area}}');
        $this->dropIndex('IDX_76237D28BD0F409C', '{{%laboratorio_pedido_area}}');
        $this->dropTable('{{%laboratorio_pedido_area}}');
    }
}
