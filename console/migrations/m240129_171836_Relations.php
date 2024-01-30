<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171836_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_denunciante_orden_inspeccion_id',
            '{{%denunciante}}','orden_inspeccion_id',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_denunciante_orden_inspeccion_id', '{{%denunciante}}');
    }
}
