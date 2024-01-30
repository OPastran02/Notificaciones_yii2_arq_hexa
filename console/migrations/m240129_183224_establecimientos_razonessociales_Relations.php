<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183224_establecimientos_razonessociales_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_establecimientos_razonessociales_establecimiento_id',
            '{{%establecimientos_razonessociales}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_establecimientos_razonessociales_razon_social_id',
            '{{%establecimientos_razonessociales}}','razon_social_id',
            '{{%razon_social}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_establecimientos_razonessociales_establecimiento_id', '{{%establecimientos_razonessociales}}');
        $this->dropForeignKey('fk_establecimientos_razonessociales_razon_social_id', '{{%establecimientos_razonessociales}}');
    }
}
