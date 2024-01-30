<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151542_laboratorio_carga_resultados extends Migration
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
            '{{%laboratorio_carga_resultados}}',
            [
                'id'=> $this->primaryKey(11),
                'determinacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'muestra_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_sin_contacto_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_pasivo_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_id'=> $this->integer(11)->null()->defaultValue(null),
                'bloqueado'=> $this->tinyInteger(1)->notNull(),
                'resultado'=> $this->string(255)->notNull(),
                'Fecha_Inicio_Analisis'=> $this->date()->null()->defaultValue(null),
                'Fecha_Fin_Analisis'=> $this->date()->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_67BED1A0AA7041B7','{{%laboratorio_carga_resultados}}',['determinacion_id'],false);
        $this->createIndex('IDX_67BED1A031177579','{{%laboratorio_carga_resultados}}',['muestra_id'],false);
        $this->createIndex('IDX_67BED1A0644ABBDE','{{%laboratorio_carga_resultados}}',['legislacion_id'],false);
        $this->createIndex('IDX_67BED1A09B5F2C0B','{{%laboratorio_carga_resultados}}',['legislacion_sin_contacto_id'],false);
        $this->createIndex('IDX_67BED1A086B5E41E','{{%laboratorio_carga_resultados}}',['legislacion_pasivo_id'],false);
        $this->createIndex('IDX_67BED1A0DB38439E','{{%laboratorio_carga_resultados}}',['usuario_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_67BED1A0AA7041B7', '{{%laboratorio_carga_resultados}}');
        $this->dropIndex('IDX_67BED1A031177579', '{{%laboratorio_carga_resultados}}');
        $this->dropIndex('IDX_67BED1A0644ABBDE', '{{%laboratorio_carga_resultados}}');
        $this->dropIndex('IDX_67BED1A09B5F2C0B', '{{%laboratorio_carga_resultados}}');
        $this->dropIndex('IDX_67BED1A086B5E41E', '{{%laboratorio_carga_resultados}}');
        $this->dropIndex('IDX_67BED1A0DB38439E', '{{%laboratorio_carga_resultados}}');
        $this->dropTable('{{%laboratorio_carga_resultados}}');
    }
}
