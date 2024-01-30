<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171721_correcionRuidos extends Migration
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
            '{{%correcionRuidos}}',
            [
                'variacion'=> $this->primaryKey(3),
                'delta'=> $this->decimal(2, 1)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('variacion_UNIQUE','{{%correcionRuidos}}',['variacion'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('variacion_UNIQUE', '{{%correcionRuidos}}');
        $this->dropTable('{{%correcionRuidos}}');
    }
}
