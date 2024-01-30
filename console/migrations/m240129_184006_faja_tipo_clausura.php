<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_184006_faja_tipo_clausura extends Migration
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
            '{{%faja_tipo_clausura}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo_clausura'=> $this->string(20)->notNull(),
                'habilitado'=> $this->smallInteger(6)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_6D30EFC65F03585A','{{%faja_tipo_clausura}}',['tipo_clausura'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_6D30EFC65F03585A', '{{%faja_tipo_clausura}}');
        $this->dropTable('{{%faja_tipo_clausura}}');
    }
}
