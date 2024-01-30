<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152906_laboratorio_pedido_area_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_pedido_area_pedido_id',
            '{{%laboratorio_pedido_area}}','pedido_id',
            '{{%laboratorio_pedido}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_area_area_id',
            '{{%laboratorio_pedido_area}}','area_id',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_pedido_area_pedido_id', '{{%laboratorio_pedido_area}}');
        $this->dropForeignKey('fk_laboratorio_pedido_area_area_id', '{{%laboratorio_pedido_area}}');
    }
}
