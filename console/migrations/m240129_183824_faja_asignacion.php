<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183824_faja_asignacion extends Migration
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
            '{{%faja_asignacion}}',
            [
                'id'=> $this->primaryKey(11),
                'id_faja'=> $this->integer(11)->notNull(),
                'id_usuario_inspector_id'=> $this->integer(11)->null()->defaultValue(null),
                'fecha_asignacion'=> $this->date()->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_C30B353589B1835','{{%faja_asignacion}}',['id_faja'],false);
        $this->createIndex('IDX_C30B353D62B872E','{{%faja_asignacion}}',['id_usuario_inspector_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_C30B353589B1835', '{{%faja_asignacion}}');
        $this->dropIndex('IDX_C30B353D62B872E', '{{%faja_asignacion}}');
        $this->dropTable('{{%faja_asignacion}}');
    }
}
