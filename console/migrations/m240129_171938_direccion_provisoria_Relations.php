<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171938_direccion_provisoria_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_direccion_provisoria_calle_id',
            '{{%direccion_provisoria}}','calle_id',
            '{{%calles}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_direccion_provisoria_orden_inspeccion_id',
            '{{%direccion_provisoria}}','orden_inspeccion_id',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_direccion_provisoria_calle_id', '{{%direccion_provisoria}}');
        $this->dropForeignKey('fk_direccion_provisoria_orden_inspeccion_id', '{{%direccion_provisoria}}');
    }
}
