<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172152_disposicion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_disposicion_reparticion_id',
            '{{%disposicion}}','reparticion_id',
            '{{%reparticion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_tipo_id',
            '{{%disposicion}}','tipo_id',
            '{{%tipo_dispo}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_id',
            '{{%disposicion}}','id',
            '{{%notificacion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_disposicion_reparticion_id', '{{%disposicion}}');
        $this->dropForeignKey('fk_disposicion_tipo_id', '{{%disposicion}}');
        $this->dropForeignKey('fk_disposicion_id', '{{%disposicion}}');
    }
}
