<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172337_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_disposicion_ley_ley_id',
            '{{%disposicion_ley}}','ley_id',
            '{{%leyes_clausura}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_disposicion_ley_disposicion_id',
            '{{%disposicion_ley}}','disposicion_id',
            '{{%disposicion_clausura}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_disposicion_ley_ley_id', '{{%disposicion_ley}}');
        $this->dropForeignKey('fk_disposicion_ley_disposicion_id', '{{%disposicion_ley}}');
    }
}
