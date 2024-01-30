<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155140_rubro extends Migration
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
            '{{%rubro}}',
            [
                'id'=> $this->primaryKey(11),
                'Rubro'=> $this->string(440)->notNull(),
                'Codigo'=> $this->string(8)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_92866CEF279F28AF','{{%rubro}}',['Codigo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_92866CEF279F28AF', '{{%rubro}}');
        $this->dropTable('{{%rubro}}');
    }
}
