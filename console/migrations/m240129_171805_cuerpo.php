<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171805_cuerpo extends Migration
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
            '{{%cuerpo}}',
            [
                'id'=> $this->primaryKey(11),
                'Nombre'=> $this->string(100)->notNull(),
                'Cuerpo'=> $this->text()->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_A72F0DD83D3C9410','{{%cuerpo}}',['Nombre'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_A72F0DD83D3C9410', '{{%cuerpo}}');
        $this->dropTable('{{%cuerpo}}');
    }
}
