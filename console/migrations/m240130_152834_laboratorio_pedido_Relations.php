<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152834_laboratorio_pedido_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_pedido_establecimiento_id',
            '{{%laboratorio_pedido}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_usuario_eliminador_id',
            '{{%laboratorio_pedido}}','usuario_eliminador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_estado_pedido_id',
            '{{%laboratorio_pedido}}','estado_pedido_id',
            '{{%laboratorio_estado_pedido}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_tipo_pedido_id',
            '{{%laboratorio_pedido}}','tipo_pedido_id',
            '{{%laboratorio_tipo_pedido}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_prioridad_id',
            '{{%laboratorio_pedido}}','prioridad_id',
            '{{%laboratorio_prioridad}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_usuario_anulador_id',
            '{{%laboratorio_pedido}}','usuario_anulador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_usuario_autorizado_id',
            '{{%laboratorio_pedido}}','usuario_autorizado_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_pedido_programa_id',
            '{{%laboratorio_pedido}}','programa_id',
            '{{%laboratorio_programa}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_pedido_establecimiento_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_usuario_eliminador_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_estado_pedido_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_tipo_pedido_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_prioridad_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_usuario_anulador_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_usuario_autorizado_id', '{{%laboratorio_pedido}}');
        $this->dropForeignKey('fk_laboratorio_pedido_programa_id', '{{%laboratorio_pedido}}');
    }
}
