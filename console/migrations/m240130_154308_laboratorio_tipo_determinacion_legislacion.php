<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154308_laboratorio_tipo_determinacion_legislacion extends Migration
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
            '{{%laboratorio_tipo_determinacion_legislacion}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_60B620CD702D1D47','{{%laboratorio_tipo_determinacion_legislacion}}',['tipo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_60B620CD702D1D47', '{{%laboratorio_tipo_determinacion_legislacion}}');
        $this->dropTable('{{%laboratorio_tipo_determinacion_legislacion}}');
    }
}
