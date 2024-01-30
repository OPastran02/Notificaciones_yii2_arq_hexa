<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183058_establecimiento extends Migration
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
            '{{%establecimiento}}',
            [
                'id'=> $this->primaryKey(11),
                'Id_Estado'=> $this->smallInteger(6)->null()->defaultValue(null),
                'Fecha_Estado'=> $this->date()->notNull(),
                'Id_Rubro_Principal'=> $this->integer(11)->notNull(),
                'Rubro_Extendido'=> $this->string(150)->null()->defaultValue(null),
                'Email'=> $this->string(50)->null()->defaultValue(null),
                'Telefono'=> $this->string(30)->null()->defaultValue(null),
                'Bandera'=> $this->string(50)->null()->defaultValue(null),
                'ExEESS'=> $this->tinyInteger(1)->notNull(),
                'observaciones'=> $this->text()->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
                'favorito'=> $this->tinyInteger(1)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_94A4D17E8537D39B','{{%establecimiento}}',['Id_Estado'],false);
        $this->createIndex('IDX_94A4D17E42AD25C7','{{%establecimiento}}',['Id_Rubro_Principal'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_94A4D17E8537D39B', '{{%establecimiento}}');
        $this->dropIndex('IDX_94A4D17E42AD25C7', '{{%establecimiento}}');
        $this->dropTable('{{%establecimiento}}');
    }
}
