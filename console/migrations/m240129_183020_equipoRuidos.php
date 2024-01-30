<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183020_equipoRuidos extends Migration
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
            '{{%equipoRuidos}}',
            [
                'id'=> $this->primaryKey(11),
                'Tipo'=> $this->char(1)->null()->defaultValue(null),
                'Marca'=> $this->string(45)->null()->defaultValue(null),
                'Modelo'=> $this->string(45)->null()->defaultValue(null),
                'Serie'=> $this->string(45)->null()->defaultValue(null),
                'Clase'=> $this->string(45)->null()->defaultValue(null),
                'Denominacion'=> $this->string(45)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('id_UNIQUE','{{%equipoRuidos}}',['id'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('id_UNIQUE', '{{%equipoRuidos}}');
        $this->dropTable('{{%equipoRuidos}}');
    }
}
