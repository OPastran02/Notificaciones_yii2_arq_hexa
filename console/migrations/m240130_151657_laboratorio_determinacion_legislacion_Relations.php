<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151657_laboratorio_determinacion_legislacion_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_determinacion_legislacion_legislacion_id',
            '{{%laboratorio_determinacion_legislacion}}','legislacion_id',
            '{{%laboratorio_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_determinacion_legislacion_tipo_id',
            '{{%laboratorio_determinacion_legislacion}}','tipo_id',
            '{{%laboratorio_tipo_determinacion_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_determinacion_legislacion_determinacion_id',
            '{{%laboratorio_determinacion_legislacion}}','determinacion_id',
            '{{%laboratorio_determinacion}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_determinacion_legislacion_legislacion_id', '{{%laboratorio_determinacion_legislacion}}');
        $this->dropForeignKey('fk_laboratorio_determinacion_legislacion_tipo_id', '{{%laboratorio_determinacion_legislacion}}');
        $this->dropForeignKey('fk_laboratorio_determinacion_legislacion_determinacion_id', '{{%laboratorio_determinacion_legislacion}}');
    }
}
