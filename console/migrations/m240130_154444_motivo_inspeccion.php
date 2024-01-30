<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154444_motivo_inspeccion extends Migration
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
            '{{%motivo_inspeccion}}',
            [
                'id'=> $this->primaryKey(11),
                'motivo'=> $this->string(60)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_CD906AAD19F93866','{{%motivo_inspeccion}}',['motivo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_CD906AAD19F93866', '{{%motivo_inspeccion}}');
        $this->dropTable('{{%motivo_inspeccion}}');
    }
}
