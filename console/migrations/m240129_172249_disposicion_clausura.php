<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172249_disposicion_clausura extends Migration
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
            '{{%disposicion_clausura}}',
            [
                'id'=> $this->primaryKey(11),
                'alcance_id'=> $this->integer(11)->null()->defaultValue(null),
                'controlador_id'=> $this->integer(11)->null()->defaultValue(null),
                'tipo_actuacion_remicion_id'=> $this->integer(11)->null()->defaultValue(null),
                'fecha_clausura'=> $this->date()->notNull(),
                'levantada'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'fecha_levantamiento'=> $this->date()->null()->defaultValue(null),
                'numero_nota_dgai'=> $this->integer(11)->null()->defaultValue(null),
                'anio_nota_dgai'=> $this->integer(11)->null()->defaultValue(null),
                'numero_giro_documental'=> $this->integer(11)->null()->defaultValue(null),
                'anio_giro_documental'=> $this->integer(11)->null()->defaultValue(null),
                'numero_actuacion_remicion'=> $this->integer(11)->null()->defaultValue(null),
                'anio_actuacion_remicion'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_5567CF19BF396750','{{%disposicion_clausura}}',['id'],true);
        $this->createIndex('IDX_5567CF196DC9ED25','{{%disposicion_clausura}}',['alcance_id'],false);
        $this->createIndex('IDX_5567CF198CCE72A9','{{%disposicion_clausura}}',['controlador_id'],false);
        $this->createIndex('IDX_5567CF19C0A2EB6C','{{%disposicion_clausura}}',['tipo_actuacion_remicion_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_5567CF19BF396750', '{{%disposicion_clausura}}');
        $this->dropIndex('IDX_5567CF196DC9ED25', '{{%disposicion_clausura}}');
        $this->dropIndex('IDX_5567CF198CCE72A9', '{{%disposicion_clausura}}');
        $this->dropIndex('IDX_5567CF19C0A2EB6C', '{{%disposicion_clausura}}');
        $this->dropTable('{{%disposicion_clausura}}');
    }
}
