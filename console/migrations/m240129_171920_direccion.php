<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171920_direccion extends Migration
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
            '{{%direccion}}',
            [
                'id'=> $this->primaryKey(11),
                'Id_Establecimiento'=> $this->integer(11)->notNull(),
                'Id_Calle'=> $this->integer(11)->notNull(),
                'Altura'=> $this->integer(11)->notNull(),
                'Piso'=> $this->string(20)->null()->defaultValue(null),
                'Dpto'=> $this->string(20)->null()->defaultValue(null),
                'Local'=> $this->string(20)->null()->defaultValue(null),
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
        $this->createIndex('IDX_F384BE95F845E5BC','{{%direccion}}',['Id_Calle'],false);
        $this->createIndex('IDX_F384BE95A8799458','{{%direccion}}',['Id_Establecimiento'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_F384BE95F845E5BC', '{{%direccion}}');
        $this->dropIndex('IDX_F384BE95A8799458', '{{%direccion}}');
        $this->dropTable('{{%direccion}}');
    }
}
