<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151444_laboratoio_estado_muestra extends Migration
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
            '{{%laboratoio_estado_muestra}}',
            [
                'id'=> $this->primaryKey(11),
                'estado'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_E222A783265DE1E3','{{%laboratoio_estado_muestra}}',['estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_E222A783265DE1E3', '{{%laboratoio_estado_muestra}}');
        $this->dropTable('{{%laboratoio_estado_muestra}}');
    }
}
