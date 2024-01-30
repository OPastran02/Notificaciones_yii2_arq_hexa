<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_165905_acta_utilizada extends Migration
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
            '{{%acta_utilizada}}',
            [
                'id'=> $this->primaryKey(11),
                'areas_id'=> $this->smallInteger(6)->null()->defaultValue(null),
                'Sap'=> $this->bigInteger(20)->null()->defaultValue(null),
                'checklist'=> $this->integer(11)->null()->defaultValue(null),
                'comprobado'=> $this->tinyInteger(1)->notNull(),
                'puntoencuentro'=> $this->string(150)->null()->defaultValue(null),
                'fechaInspeccion'=> $this->date()->notNull(),
                'dominioL'=> $this->string(4)->null()->defaultValue(null),
                'dominioR'=> $this->integer(11)->null()->defaultValue(null),
                'interno'=> $this->integer(11)->null()->defaultValue(null),
                'marca'=> $this->string(50)->null()->defaultValue(null),
                'modelo'=> $this->string(50)->null()->defaultValue(null),
                'ruido'=> $this->double()->null()->defaultValue(null),
                'humo'=> $this->double()->null()->defaultValue(null),
                'fechaRecepcion'=> $this->date()->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_9CFE5BE7BF396750','{{%acta_utilizada}}',['id'],true);
        $this->createIndex('IDX_9CFE5BE71E756D0A','{{%acta_utilizada}}',['areas_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_9CFE5BE7BF396750', '{{%acta_utilizada}}');
        $this->dropIndex('IDX_9CFE5BE71E756D0A', '{{%acta_utilizada}}');
        $this->dropTable('{{%acta_utilizada}}');
    }
}
