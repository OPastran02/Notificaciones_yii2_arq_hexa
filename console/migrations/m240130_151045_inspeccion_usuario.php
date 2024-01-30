<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151045_inspeccion_usuario extends Migration
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
            '{{%inspeccion_usuario}}',
            [
                'inspeccion_id'=> $this->integer(11)->notNull(),
                'usuario_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_F2B0A73C52568F9F','{{%inspeccion_usuario}}',['inspeccion_id'],false);
        $this->createIndex('IDX_F2B0A73CDB38439E','{{%inspeccion_usuario}}',['usuario_id'],false);
        $this->addPrimaryKey('pk_on_inspeccion_usuario','{{%inspeccion_usuario}}',['inspeccion_id','usuario_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_inspeccion_usuario','{{%inspeccion_usuario}}');
        $this->dropIndex('IDX_F2B0A73C52568F9F', '{{%inspeccion_usuario}}');
        $this->dropIndex('IDX_F2B0A73CDB38439E', '{{%inspeccion_usuario}}');
        $this->dropTable('{{%inspeccion_usuario}}');
    }
}
