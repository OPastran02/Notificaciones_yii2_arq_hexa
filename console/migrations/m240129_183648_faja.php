<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183648_faja extends Migration
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
            '{{%faja}}',
            [
                'id'=> $this->primaryKey(11),
                'id_estado'=> $this->integer(11)->notNull(),
                'id_area'=> $this->smallInteger(6)->null()->defaultValue(null),
                'id_tipo_clausura'=> $this->integer(11)->null()->defaultValue(null),
                'id_inspeccion'=> $this->integer(11)->null()->defaultValue(null),
                'numero'=> $this->integer(11)->notNull(),
                'id_sap'=> $this->bigInteger(20)->null()->defaultValue(null),
                'checklist'=> $this->integer(11)->null()->defaultValue(null),
                'fecha_recepcion'=> $this->date()->null()->defaultValue(null),
                'fecha_inspeccion'=> $this->date()->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_D3BB0437F55AE19E','{{%faja}}',['numero'],true);
        $this->createIndex('IDX_D3BB04376A540E','{{%faja}}',['id_estado'],false);
        $this->createIndex('IDX_D3BB04375CB4216A','{{%faja}}',['id_area'],false);
        $this->createIndex('IDX_D3BB0437E12B893F','{{%faja}}',['id_tipo_clausura'],false);
        $this->createIndex('IDX_D3BB043791B5DB74','{{%faja}}',['id_inspeccion'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_D3BB0437F55AE19E', '{{%faja}}');
        $this->dropIndex('IDX_D3BB04376A540E', '{{%faja}}');
        $this->dropIndex('IDX_D3BB04375CB4216A', '{{%faja}}');
        $this->dropIndex('IDX_D3BB0437E12B893F', '{{%faja}}');
        $this->dropIndex('IDX_D3BB043791B5DB74', '{{%faja}}');
        $this->dropTable('{{%faja}}');
    }
}
