<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152252_laboratorio_muestra_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_muestra_usuario_autorizador_id',
            '{{%laboratorio_muestra}}','usuario_autorizador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_muestra_usuario_supervisador_id',
            '{{%laboratorio_muestra}}','usuario_supervisador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_muestra_pedido_id',
            '{{%laboratorio_muestra}}','pedido_id',
            '{{%laboratorio_pedido}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_muestra_usuario_autorizador_id', '{{%laboratorio_muestra}}');
        $this->dropForeignKey('fk_laboratorio_muestra_usuario_supervisador_id', '{{%laboratorio_muestra}}');
        $this->dropForeignKey('fk_laboratorio_muestra_pedido_id', '{{%laboratorio_muestra}}');
    }
}
