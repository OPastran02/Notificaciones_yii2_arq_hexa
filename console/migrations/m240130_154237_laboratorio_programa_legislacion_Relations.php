<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154237_laboratorio_programa_legislacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_programa_legislacion_legislacion_id',
            '{{%laboratorio_programa_legislacion}}','legislacion_id',
            '{{%laboratorio_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_programa_legislacion_programa_id',
            '{{%laboratorio_programa_legislacion}}','programa_id',
            '{{%laboratorio_programa}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_programa_legislacion_legislacion_id', '{{%laboratorio_programa_legislacion}}');
        $this->dropForeignKey('fk_laboratorio_programa_legislacion_programa_id', '{{%laboratorio_programa_legislacion}}');
    }
}
