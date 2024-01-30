<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183307_establecimientos_rubros_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_establecimientos_rubros_establecimiento_id',
            '{{%establecimientos_rubros}}','establecimiento_id',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_establecimientos_rubros_rubro_id',
            '{{%establecimientos_rubros}}','rubro_id',
            '{{%rubro}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_establecimientos_rubros_establecimiento_id', '{{%establecimientos_rubros}}');
        $this->dropForeignKey('fk_establecimientos_rubros_rubro_id', '{{%establecimientos_rubros}}');
    }
}
