<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171921_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_direccion_Id_Establecimiento',
            '{{%direccion}}','Id_Establecimiento',
            '{{%establecimiento}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_direccion_Id_Calle',
            '{{%direccion}}','Id_Calle',
            '{{%calles}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_direccion_Id_Establecimiento', '{{%direccion}}');
        $this->dropForeignKey('fk_direccion_Id_Calle', '{{%direccion}}');
    }
}
