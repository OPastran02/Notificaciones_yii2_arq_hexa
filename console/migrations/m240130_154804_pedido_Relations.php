<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154804_pedido_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_pedido_usuario_autorizador_id',
            '{{%pedido}}','usuario_autorizador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_pedido_usuario_autorizador_id', '{{%pedido}}');
    }
}
