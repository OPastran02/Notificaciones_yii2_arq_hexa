<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183552_estado_notificacion extends Migration
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
            '{{%estado_notificacion}}',
            [
                'id'=> $this->primaryKey(11),
                'estado'=> $this->string(50)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_19CB44F1265DE1E3','{{%estado_notificacion}}',['estado'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_19CB44F1265DE1E3', '{{%estado_notificacion}}');
        $this->dropTable('{{%estado_notificacion}}');
    }
}
