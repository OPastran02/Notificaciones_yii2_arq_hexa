<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151959_laboratorio_historial_carga_resultados extends Migration
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
            '{{%laboratorio_historial_carga_resultados}}',
            [
                'id'=> $this->primaryKey(11),
                'id_resultado_id'=> $this->integer(11)->null()->defaultValue(null),
                'determinacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_sin_contacto_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_pasivo_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_id'=> $this->integer(11)->null()->defaultValue(null),
                'resultado'=> $this->string(255)->notNull(),
                'Fecha_Inicio_Analisis'=> $this->date()->null()->defaultValue(null),
                'Fecha_Fin_Analisis'=> $this->date()->null()->defaultValue(null),
                'Fecha_Creado'=> $this->datetime()->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_650FDF83DC9099C4','{{%laboratorio_historial_carga_resultados}}',['id_resultado_id'],false);
        $this->createIndex('IDX_650FDF83AA7041B7','{{%laboratorio_historial_carga_resultados}}',['determinacion_id'],false);
        $this->createIndex('IDX_650FDF83644ABBDE','{{%laboratorio_historial_carga_resultados}}',['legislacion_id'],false);
        $this->createIndex('IDX_650FDF839B5F2C0B','{{%laboratorio_historial_carga_resultados}}',['legislacion_sin_contacto_id'],false);
        $this->createIndex('IDX_650FDF8386B5E41E','{{%laboratorio_historial_carga_resultados}}',['legislacion_pasivo_id'],false);
        $this->createIndex('IDX_650FDF83DB38439E','{{%laboratorio_historial_carga_resultados}}',['usuario_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_650FDF83DC9099C4', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropIndex('IDX_650FDF83AA7041B7', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropIndex('IDX_650FDF83644ABBDE', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropIndex('IDX_650FDF839B5F2C0B', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropIndex('IDX_650FDF8386B5E41E', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropIndex('IDX_650FDF83DB38439E', '{{%laboratorio_historial_carga_resultados}}');
        $this->dropTable('{{%laboratorio_historial_carga_resultados}}');
    }
}
