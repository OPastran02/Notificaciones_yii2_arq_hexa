<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155454_usuarios_tipousuarios_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_usuarios_tipousuarios_id_tipo_usuario',
            '{{%usuarios_tipousuarios}}','id_tipo_usuario',
            '{{%usuario_tipo}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_usuarios_tipousuarios_id_usuario',
            '{{%usuarios_tipousuarios}}','id_usuario',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_usuarios_tipousuarios_id_tipo_usuario', '{{%usuarios_tipousuarios}}');
        $this->dropForeignKey('fk_usuarios_tipousuarios_id_usuario', '{{%usuarios_tipousuarios}}');
    }
}
