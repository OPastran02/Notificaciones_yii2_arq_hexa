<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172336_disposicion_ley extends Migration
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
            '{{%disposicion_ley}}',
            [
                'disposicion_id'=> $this->integer(11)->notNull(),
                'ley_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_4CE6082D8A02C7AD','{{%disposicion_ley}}',['disposicion_id'],false);
        $this->createIndex('IDX_4CE6082D1011658B','{{%disposicion_ley}}',['ley_id'],false);
        $this->addPrimaryKey('pk_on_disposicion_ley','{{%disposicion_ley}}',['disposicion_id','ley_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_disposicion_ley','{{%disposicion_ley}}');
        $this->dropIndex('IDX_4CE6082D8A02C7AD', '{{%disposicion_ley}}');
        $this->dropIndex('IDX_4CE6082D1011658B', '{{%disposicion_ley}}');
        $this->dropTable('{{%disposicion_ley}}');
    }
}
