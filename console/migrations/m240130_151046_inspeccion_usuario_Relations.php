<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151046_inspeccion_usuario_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_inspeccion_usuario_inspeccion_id',
            '{{%inspeccion_usuario}}','inspeccion_id',
            '{{%inspeccion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_inspeccion_usuario_usuario_id',
            '{{%inspeccion_usuario}}','usuario_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_inspeccion_usuario_inspeccion_id', '{{%inspeccion_usuario}}');
        $this->dropForeignKey('fk_inspeccion_usuario_usuario_id', '{{%inspeccion_usuario}}');
    }
}
