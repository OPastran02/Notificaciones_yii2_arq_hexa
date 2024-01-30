<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_184111_historial_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_historial_usuario_motificador_id',
            '{{%historial}}','usuario_motificador_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_historial_usuario_motificador_id', '{{%historial}}');
    }
}
