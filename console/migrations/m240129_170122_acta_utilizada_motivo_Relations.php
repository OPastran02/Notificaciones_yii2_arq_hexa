<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_170122_acta_utilizada_motivo_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_acta_utilizada_motivo_id_acta_motivo',
            '{{%acta_utilizada_motivo}}','id_acta_motivo',
            '{{%acta_motivo}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_acta_utilizada_motivo_id_acta_utilizada',
            '{{%acta_utilizada_motivo}}','id_acta_utilizada',
            '{{%acta_utilizada}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_acta_utilizada_motivo_id_acta_motivo', '{{%acta_utilizada_motivo}}');
        $this->dropForeignKey('fk_acta_utilizada_motivo_id_acta_utilizada', '{{%acta_utilizada_motivo}}');
    }
}
