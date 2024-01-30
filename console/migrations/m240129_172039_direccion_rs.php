<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172039_direccion_rs extends Migration
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
            '{{%direccion_rs}}',
            [
                'id'=> $this->primaryKey(11),
                'Id_RazonSocial'=> $this->integer(11)->notNull(),
                'Id_Calle'=> $this->integer(11)->notNull(),
                'Altura'=> $this->integer(11)->notNull(),
                'Piso'=> $this->string(6)->null()->defaultValue(null),
                'Dpto'=> $this->string(6)->null()->defaultValue(null),
                'Local'=> $this->string(6)->null()->defaultValue(null),
                'Comuna'=> $this->smallInteger(6)->notNull(),
                'Lon'=> $this->double()->notNull(),
                'Lat'=> $this->double()->notNull(),
                'SMP'=> $this->string(20)->notNull(),
                'PMatriz'=> $this->integer(11)->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'cmr'=> $this->tinyInteger(1)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_27EF358AF845E5BC','{{%direccion_rs}}',['Id_Calle'],false);
        $this->createIndex('IDX_27EF358AD0C6869E','{{%direccion_rs}}',['Id_RazonSocial'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_27EF358AF845E5BC', '{{%direccion_rs}}');
        $this->dropIndex('IDX_27EF358AD0C6869E', '{{%direccion_rs}}');
        $this->dropTable('{{%direccion_rs}}');
    }
}
