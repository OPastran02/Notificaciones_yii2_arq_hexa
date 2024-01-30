<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155453_usuarios_tipousuarios extends Migration
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
            '{{%usuarios_tipousuarios}}',
            [
                'id_usuario'=> $this->integer(11)->notNull(),
                'id_tipo_usuario'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_223ED2ADFCF8192D','{{%usuarios_tipousuarios}}',['id_usuario'],false);
        $this->createIndex('IDX_223ED2AD125DE48F','{{%usuarios_tipousuarios}}',['id_tipo_usuario'],false);
        $this->addPrimaryKey('pk_on_usuarios_tipousuarios','{{%usuarios_tipousuarios}}',['id_usuario','id_tipo_usuario']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_usuarios_tipousuarios','{{%usuarios_tipousuarios}}');
        $this->dropIndex('IDX_223ED2ADFCF8192D', '{{%usuarios_tipousuarios}}');
        $this->dropIndex('IDX_223ED2AD125DE48F', '{{%usuarios_tipousuarios}}');
        $this->dropTable('{{%usuarios_tipousuarios}}');
    }
}
