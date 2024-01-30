<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172040_direccion_rs_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_direccion_rs_Id_RazonSocial',
            '{{%direccion_rs}}','Id_RazonSocial',
            '{{%razon_social}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_direccion_rs_Id_Calle',
            '{{%direccion_rs}}','Id_Calle',
            '{{%calles}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_direccion_rs_Id_RazonSocial', '{{%direccion_rs}}');
        $this->dropForeignKey('fk_direccion_rs_Id_Calle', '{{%direccion_rs}}');
    }
}
