<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154427_leyes_clausura extends Migration
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
            '{{%leyes_clausura}}',
            [
                'id'=> $this->primaryKey(11),
                'Ley'=> $this->string(100)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_A05EE257B792FBCC','{{%leyes_clausura}}',['Ley'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_A05EE257B792FBCC', '{{%leyes_clausura}}');
        $this->dropTable('{{%leyes_clausura}}');
    }
}
