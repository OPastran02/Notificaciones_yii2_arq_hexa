<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172714_encuesta_falta_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_encuesta_falta_grupo_id',
            '{{%encuesta_falta}}','grupo_id',
            '{{%encuesta_requisitos_pregunta_grupo}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_encuesta_falta_grupo_id', '{{%encuesta_falta}}');
    }
}
