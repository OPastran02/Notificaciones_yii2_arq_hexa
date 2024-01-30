<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_163744_acta extends Migration
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
            '{{%acta}}',
            [
                'id'=> $this->primaryKey(11),
                'id_inspeccion'=> $this->integer(11)->null()->defaultValue(null),
                'estado_id'=> $this->integer(11)->null()->defaultValue(null),
                'Serie'=> $this->string(2)->notNull(),
                'Numero'=> $this->integer(11)->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
                'NumeroGedoFormulario'=> $this->string(100)->notNull(),
                'FechaDeCreacionGedoFormulario'=> $this->date()->notNull(),
                'NumeroActaGedoFormulario'=> $this->string(45)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_99A9D73F91B5DB74','{{%acta}}',['id_inspeccion'],false);
        $this->createIndex('IDX_99A9D73F9F5A440B','{{%acta}}',['estado_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_99A9D73F91B5DB74', '{{%acta}}');
        $this->dropIndex('IDX_99A9D73F9F5A440B', '{{%acta}}');
        $this->dropTable('{{%acta}}');
    }
}
