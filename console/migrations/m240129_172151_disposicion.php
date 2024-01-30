<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172151_disposicion extends Migration
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
            '{{%disposicion}}',
            [
                'id'=> $this->primaryKey(11),
                'reparticion_id'=> $this->integer(11)->null()->defaultValue(null),
                'tipo_id'=> $this->integer(11)->null()->defaultValue(null),
                'numero'=> $this->integer(11)->notNull(),
                'anio'=> $this->integer(11)->notNull(),
                'requiereInspector'=> $this->tinyInteger(1)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_8196D046BF396750','{{%disposicion}}',['id'],true);
        $this->createIndex('IDX_8196D046201FA7E6','{{%disposicion}}',['reparticion_id'],false);
        $this->createIndex('IDX_8196D046A9276E6C','{{%disposicion}}',['tipo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_8196D046BF396750', '{{%disposicion}}');
        $this->dropIndex('IDX_8196D046201FA7E6', '{{%disposicion}}');
        $this->dropIndex('IDX_8196D046A9276E6C', '{{%disposicion}}');
        $this->dropTable('{{%disposicion}}');
    }
}
