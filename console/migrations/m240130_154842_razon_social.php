<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154842_razon_social extends Migration
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
            '{{%razon_social}}',
            [
                'id'=> $this->primaryKey(11),
                'cuit'=> $this->bigInteger(20)->notNull(),
                'tipo'=> $this->string(1)->notNull(),
                'telefono'=> $this->string(50)->null()->defaultValue(null),
                'mail'=> $this->string(100)->null()->defaultValue(null),
                'nombre1'=> $this->string(100)->notNull(),
                'nombre2'=> $this->string(100)->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_9010A02BB9BA4881','{{%razon_social}}',['cuit'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_9010A02BB9BA4881', '{{%razon_social}}');
        $this->dropTable('{{%razon_social}}');
    }
}
