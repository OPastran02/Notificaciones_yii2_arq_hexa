<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_163350_Vibraciones extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%Vibraciones}}',
            [
                'idVibraciones'=> $this->primaryKey(11),
                'Tipo'=> $this->integer(11)->null()->defaultValue(null),
                'horario'=> $this->integer(11)->null()->defaultValue(null),
                'LMP_Eje_X'=> $this->float()->null()->defaultValue(null),
                'LMP_Eje_Y'=> $this->float()->null()->defaultValue(null),
                'LMP_Eje_Z'=> $this->float()->null()->defaultValue(null),
                'Area'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%Vibraciones}}');
    }
}
