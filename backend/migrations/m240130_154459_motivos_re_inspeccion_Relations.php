<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154459_motivos_re_inspeccion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_motivos_re_inspeccion_Id_Usuario_Creador',
            '{{%motivos_re_inspeccion}}','Id_Usuario_Creador',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_motivos_re_inspeccion_orden_inspeccion_id',
            '{{%motivos_re_inspeccion}}','orden_inspeccion_id',
            '{{%orden_inspeccion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_motivos_re_inspeccion_Id_Usuario_Creador', '{{%motivos_re_inspeccion}}');
        $this->dropForeignKey('fk_motivos_re_inspeccion_orden_inspeccion_id', '{{%motivos_re_inspeccion}}');
    }
}
