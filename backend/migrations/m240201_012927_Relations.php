<?php

use yii\db\Schema;
use yii\db\Migration;

class m240201_012927_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_usuarios_idArea',
            '{{%usuarios}}','idArea',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_usuarios_idArea', '{{%usuarios}}');
    }
}
