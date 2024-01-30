<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183620_estado_res326 extends Migration
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
            '{{%estado_res326}}',
            [
                'id'=> $this->primaryKey(11),
                'estadoRes326'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_882E08B15CF80F5F','{{%estado_res326}}',['estadoRes326'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_882E08B15CF80F5F', '{{%estado_res326}}');
        $this->dropTable('{{%estado_res326}}');
    }
}
