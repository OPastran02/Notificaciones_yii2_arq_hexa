<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171312_cedula_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_cedula_tipo_id',
            '{{%cedula}}','tipo_id',
            '{{%tipo_cedula}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_cedula_id',
            '{{%cedula}}','id',
            '{{%notificacion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_cedula_tipo_id', '{{%cedula}}');
        $this->dropForeignKey('fk_cedula_id', '{{%cedula}}');
    }
}
