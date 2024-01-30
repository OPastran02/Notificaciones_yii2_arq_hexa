<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155406_tramite_efluentes extends Migration
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
            '{{%tramite_efluentes}}',
            [
                'id'=> $this->primaryKey(11),
                'tramiteEfluentes'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_9E1DB25140D8E127','{{%tramite_efluentes}}',['tramiteEfluentes'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_9E1DB25140D8E127', '{{%tramite_efluentes}}');
        $this->dropTable('{{%tramite_efluentes}}');
    }
}
