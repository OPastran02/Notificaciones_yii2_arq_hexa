<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_161357_Ruidos extends Migration
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
            '{{%Ruidos}}',
            [
                'idRuidos'=> $this->primaryKey(11),
                'ASAE'=> $this->integer(11)->null()->defaultValue(null),
                'Ambiente'=> $this->integer(11)->null()->defaultValue(null),
                'Periodo'=> $this->integer(11)->null()->defaultValue(null),
                'ASA'=> $this->integer(11)->null()->defaultValue(null),
                'Recinto'=> $this->integer(11)->null()->defaultValue(null),
                'Uso_predominante'=> $this->integer(11)->null()->defaultValue(null),
                'LMP'=> $this->integer(11)->null()->defaultValue(null),
                'Correccion'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%Ruidos}}');
    }
}
