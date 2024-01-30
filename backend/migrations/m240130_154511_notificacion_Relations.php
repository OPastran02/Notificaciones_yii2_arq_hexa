<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154511_notificacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_notificacion_notificador_id',
            '{{%notificacion}}','notificador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_notificacion_establecimiento_id',
            '{{%notificacion}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_notificacion_estado_id',
            '{{%notificacion}}','estado_id',
            '{{%estado_notificacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_notificacion_id_pedido',
            '{{%notificacion}}','id_pedido',
            '{{%pedido}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_notificacion_notificador_id', '{{%notificacion}}');
        $this->dropForeignKey('fk_notificacion_establecimiento_id', '{{%notificacion}}');
        $this->dropForeignKey('fk_notificacion_estado_id', '{{%notificacion}}');
        $this->dropForeignKey('fk_notificacion_id_pedido', '{{%notificacion}}');
    }
}
