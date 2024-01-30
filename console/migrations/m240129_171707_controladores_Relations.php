<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171707_controladores_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_controladores_reparticion_id',
            '{{%controladores}}','reparticion_id',
            '{{%reparticion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_controladores_reparticion_id', '{{%controladores}}');
    }
}
