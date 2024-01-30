<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183059_establecimiento_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_establecimiento_Id_Rubro_Principal',
            '{{%establecimiento}}','Id_Rubro_Principal',
            '{{%rubro_principal}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_establecimiento_Id_Estado',
            '{{%establecimiento}}','Id_Estado',
            '{{%estado}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_establecimiento_Id_Rubro_Principal', '{{%establecimiento}}');
        $this->dropForeignKey('fk_establecimiento_Id_Estado', '{{%establecimiento}}');
    }
}
