<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_170121_acta_utilizada_motivo extends Migration
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
            '{{%acta_utilizada_motivo}}',
            [
                'id_acta_utilizada'=> $this->integer(11)->notNull(),
                'id_acta_motivo'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_40160F68A198E6E1','{{%acta_utilizada_motivo}}',['id_acta_utilizada'],false);
        $this->createIndex('IDX_40160F6814B7B8F7','{{%acta_utilizada_motivo}}',['id_acta_motivo'],false);
        $this->addPrimaryKey('pk_on_acta_utilizada_motivo','{{%acta_utilizada_motivo}}',['id_acta_utilizada','id_acta_motivo']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_acta_utilizada_motivo','{{%acta_utilizada_motivo}}');
        $this->dropIndex('IDX_40160F68A198E6E1', '{{%acta_utilizada_motivo}}');
        $this->dropIndex('IDX_40160F6814B7B8F7', '{{%acta_utilizada_motivo}}');
        $this->dropTable('{{%acta_utilizada_motivo}}');
    }
}
