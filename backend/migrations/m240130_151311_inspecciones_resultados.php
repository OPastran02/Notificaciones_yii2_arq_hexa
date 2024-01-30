<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151311_inspecciones_resultados extends Migration
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
            '{{%inspecciones_resultados}}',
            [
                'id'=> $this->primaryKey(11),
                'orden_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'pregunta_id'=> $this->integer(11)->null()->defaultValue(null),
                'grupo_id'=> $this->integer(11)->null()->defaultValue(null),
                'RespuestaLibre'=> $this->string(5000)->null()->defaultValue(null),
                'orden'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_7109E174FEA2F1E6','{{%inspecciones_resultados}}',['orden_inspeccion_id'],false);
        $this->createIndex('IDX_7109E17431A5801E','{{%inspecciones_resultados}}',['pregunta_id'],false);
        $this->createIndex('IDX_7109E1749C833003','{{%inspecciones_resultados}}',['grupo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_7109E174FEA2F1E6', '{{%inspecciones_resultados}}');
        $this->dropIndex('IDX_7109E17431A5801E', '{{%inspecciones_resultados}}');
        $this->dropIndex('IDX_7109E1749C833003', '{{%inspecciones_resultados}}');
        $this->dropTable('{{%inspecciones_resultados}}');
    }
}
