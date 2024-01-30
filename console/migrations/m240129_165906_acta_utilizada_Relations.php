<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165906_acta_utilizada_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_acta_utilizada_areas_id',
            '{{%acta_utilizada}}','areas_id',
            '{{%area}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_acta_utilizada_id',
            '{{%acta_utilizada}}','id',
            '{{%acta}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_acta_utilizada_areas_id', '{{%acta_utilizada}}');
        $this->dropForeignKey('fk_acta_utilizada_id', '{{%acta_utilizada}}');
    }
}
