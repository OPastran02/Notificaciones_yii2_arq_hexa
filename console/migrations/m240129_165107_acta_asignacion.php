<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165107_acta_asignacion extends Migration
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
            '{{%acta_asignacion}}',
            [
                'id'=> $this->primaryKey(11),
                'acta_id'=> $this->integer(11)->null()->defaultValue(null),
                'inspector_id'=> $this->integer(11)->null()->defaultValue(null),
                'fecha'=> $this->date()->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_38BED28E28052F90','{{%acta_asignacion}}',['acta_id'],false);
        $this->createIndex('IDX_38BED28ED0E3F35F','{{%acta_asignacion}}',['inspector_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_38BED28E28052F90', '{{%acta_asignacion}}');
        $this->dropIndex('IDX_38BED28ED0E3F35F', '{{%acta_asignacion}}');
        $this->dropTable('{{%acta_asignacion}}');
    }
}
