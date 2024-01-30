<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155232_rubro_principal extends Migration
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
            '{{%rubro_principal}}',
            [
                'id'=> $this->primaryKey(11),
                'RubroPrincipal'=> $this->string(50)->notNull(),
                'Frecuencia'=> $this->smallInteger(6)->notNull(),
                'Habilitado'=> $this->tinyInteger(1)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_FC81E242B696E56E','{{%rubro_principal}}',['RubroPrincipal'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_FC81E242B696E56E', '{{%rubro_principal}}');
        $this->dropTable('{{%rubro_principal}}');
    }
}
