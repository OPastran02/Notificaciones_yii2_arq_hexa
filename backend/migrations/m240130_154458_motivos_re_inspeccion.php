<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154458_motivos_re_inspeccion extends Migration
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
            '{{%motivos_re_inspeccion}}',
            [
                'id'=> $this->primaryKey(11),
                'orden_inspeccion_id'=> $this->integer(11)->null()->defaultValue(null),
                'motivo'=> $this->string(2500)->notNull(),
                'gofa'=> $this->tinyInteger(1)->notNull(),
                'Fecha_Creado'=> $this->datetime()->notNull(),
                'desestimar_reinspeccion'=> $this->tinyInteger(1)->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_13364B3CFEA2F1E6','{{%motivos_re_inspeccion}}',['orden_inspeccion_id'],false);
        $this->createIndex('IDX_13364B3C2A669FEE','{{%motivos_re_inspeccion}}',['Id_Usuario_Creador'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_13364B3CFEA2F1E6', '{{%motivos_re_inspeccion}}');
        $this->dropIndex('IDX_13364B3C2A669FEE', '{{%motivos_re_inspeccion}}');
        $this->dropTable('{{%motivos_re_inspeccion}}');
    }
}
