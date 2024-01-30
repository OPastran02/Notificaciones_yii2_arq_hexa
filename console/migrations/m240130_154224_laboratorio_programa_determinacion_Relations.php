<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154224_laboratorio_programa_determinacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_programa_determinacion_determinacion_id',
            '{{%laboratorio_programa_determinacion}}','determinacion_id',
            '{{%laboratorio_determinacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_programa_determinacion_programa_id',
            '{{%laboratorio_programa_determinacion}}','programa_id',
            '{{%laboratorio_programa}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_programa_determinacion_determinacion_id', '{{%laboratorio_programa_determinacion}}');
        $this->dropForeignKey('fk_laboratorio_programa_determinacion_programa_id', '{{%laboratorio_programa_determinacion}}');
    }
}
