<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151656_laboratorio_determinacion_legislacion extends Migration
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
            '{{%laboratorio_determinacion_legislacion}}',
            [
                'id'=> $this->primaryKey(11),
                'determinacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'legislacion_id'=> $this->integer(11)->null()->defaultValue(null),
                'tipo_id'=> $this->integer(11)->null()->defaultValue(null),
                'min'=> $this->double()->null()->defaultValue(null),
                'minIgual'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'max'=> $this->double()->null()->defaultValue(null),
                'maxIgual'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'MostrarComo'=> $this->string(255)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_C7F6548EAA7041B7','{{%laboratorio_determinacion_legislacion}}',['determinacion_id'],false);
        $this->createIndex('IDX_C7F6548E644ABBDE','{{%laboratorio_determinacion_legislacion}}',['legislacion_id'],false);
        $this->createIndex('IDX_C7F6548EA9276E6C','{{%laboratorio_determinacion_legislacion}}',['tipo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_C7F6548EAA7041B7', '{{%laboratorio_determinacion_legislacion}}');
        $this->dropIndex('IDX_C7F6548E644ABBDE', '{{%laboratorio_determinacion_legislacion}}');
        $this->dropIndex('IDX_C7F6548EA9276E6C', '{{%laboratorio_determinacion_legislacion}}');
        $this->dropTable('{{%laboratorio_determinacion_legislacion}}');
    }
}
