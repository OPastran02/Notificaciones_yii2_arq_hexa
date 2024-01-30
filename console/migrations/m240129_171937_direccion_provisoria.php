<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171937_direccion_provisoria extends Migration
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
            '{{%direccion_provisoria}}',
            [
                'id'=> $this->primaryKey(11),
                'calle_id'=> $this->integer(11)->null()->defaultValue(null),
                'orden_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'altura'=> $this->integer(11)->notNull(),
                'piso'=> $this->string(6)->null()->defaultValue(null),
                'dpto'=> $this->string(6)->null()->defaultValue(null),
                'local'=> $this->string(6)->null()->defaultValue(null),
                'comuna'=> $this->smallInteger(6)->notNull(),
                'lon'=> $this->double()->notNull(),
                'lat'=> $this->double()->notNull(),
                'SMP'=> $this->string(20)->notNull(),
                'pMatriz'=> $this->integer(11)->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
                'cmr'=> $this->tinyInteger(1)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_77BF1B73A08B711E','{{%direccion_provisoria}}',['calle_id'],false);
        $this->createIndex('IDX_77BF1B73FEA2F1E6','{{%direccion_provisoria}}',['orden_inspeccion_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_77BF1B73A08B711E', '{{%direccion_provisoria}}');
        $this->dropIndex('IDX_77BF1B73FEA2F1E6', '{{%direccion_provisoria}}');
        $this->dropTable('{{%direccion_provisoria}}');
    }
}
