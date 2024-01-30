<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183825_faja_asignacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_faja_asignacion_id_faja',
            '{{%faja_asignacion}}','id_faja',
            '{{%faja}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_faja_asignacion_id_usuario_inspector_id',
            '{{%faja_asignacion}}','id_usuario_inspector_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_faja_asignacion_id_faja', '{{%faja_asignacion}}');
        $this->dropForeignKey('fk_faja_asignacion_id_usuario_inspector_id', '{{%faja_asignacion}}');
    }
}
