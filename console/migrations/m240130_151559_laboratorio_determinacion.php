<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151559_laboratorio_determinacion extends Migration
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
            '{{%laboratorio_determinacion}}',
            [
                'id'=> $this->primaryKey(11),
                'area_id'=> $this->smallInteger(6)->null()->defaultValue(null),
                'nombre'=> $this->string(255)->notNull(),
                'unidadMedida'=> $this->string(255)->notNull(),
                'limiteCuantificable'=> $this->string(255)->notNull(),
                'habilitado'=> $this->tinyInteger(1)->notNull(),
                'metodologia'=> $this->string(255)->notNull(),
                'tipo_dato'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_1109E9C4BD0F409C','{{%laboratorio_determinacion}}',['area_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_1109E9C4BD0F409C', '{{%laboratorio_determinacion}}');
        $this->dropTable('{{%laboratorio_determinacion}}');
    }
}
