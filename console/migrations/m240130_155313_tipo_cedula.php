<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155313_tipo_cedula extends Migration
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
            '{{%tipo_cedula}}',
            [
                'id'=> $this->primaryKey(11),
                'TipoCedula'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_EE4A6DF8BF86EB52','{{%tipo_cedula}}',['TipoCedula'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_EE4A6DF8BF86EB52', '{{%tipo_cedula}}');
        $this->dropTable('{{%tipo_cedula}}');
    }
}
