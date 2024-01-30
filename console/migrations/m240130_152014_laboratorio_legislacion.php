<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152014_laboratorio_legislacion extends Migration
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
            '{{%laboratorio_legislacion}}',
            [
                'id'=> $this->primaryKey(11),
                'legislacion'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_194B0E9D13FE5C5','{{%laboratorio_legislacion}}',['legislacion'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_194B0E9D13FE5C5', '{{%laboratorio_legislacion}}');
        $this->dropTable('{{%laboratorio_legislacion}}');
    }
}
