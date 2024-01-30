<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_172436_encuesta_agrupacion_faltas extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%encuesta_agrupacion_faltas}}',
            [
                'falta_id1'=> $this->integer(11)->notNull(),
                'falta_id2'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_1E5563EB29E13ADC','{{%encuesta_agrupacion_faltas}}',['falta_id1'],false);
        $this->createIndex('IDX_1E5563EBB0E86B66','{{%encuesta_agrupacion_faltas}}',['falta_id2'],false);
        $this->addPrimaryKey('pk_on_encuesta_agrupacion_faltas','{{%encuesta_agrupacion_faltas}}',['falta_id1','falta_id2']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_encuesta_agrupacion_faltas','{{%encuesta_agrupacion_faltas}}');
        $this->dropIndex('IDX_1E5563EB29E13ADC', '{{%encuesta_agrupacion_faltas}}');
        $this->dropIndex('IDX_1E5563EBB0E86B66', '{{%encuesta_agrupacion_faltas}}');
        $this->dropTable('{{%encuesta_agrupacion_faltas}}');
    }
}
