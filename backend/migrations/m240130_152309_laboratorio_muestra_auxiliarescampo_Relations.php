<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152309_laboratorio_muestra_auxiliarescampo_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_muestra_auxiliarescampo_muestra_id',
            '{{%laboratorio_muestra_auxiliarescampo}}','muestra_id',
            '{{%laboratorio_muestra}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_muestra_auxiliarescampo_usuario_id',
            '{{%laboratorio_muestra_auxiliarescampo}}','usuario_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_muestra_auxiliarescampo_muestra_id', '{{%laboratorio_muestra_auxiliarescampo}}');
        $this->dropForeignKey('fk_laboratorio_muestra_auxiliarescampo_usuario_id', '{{%laboratorio_muestra_auxiliarescampo}}');
    }
}
