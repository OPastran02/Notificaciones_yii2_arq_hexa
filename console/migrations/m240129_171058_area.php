<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171058_area extends Migration
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
            '{{%area}}',
            [
                'id'=> $this->primaryKey(6),
                'area'=> $this->string(50)->notNull(),
                'titulo'=> $this->string(100)->null()->defaultValue(null),
                'cargo'=> $this->string(100)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_D7943D68D7943D68','{{%area}}',['area'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_D7943D68D7943D68', '{{%area}}');
        $this->dropTable('{{%area}}');
    }
}
