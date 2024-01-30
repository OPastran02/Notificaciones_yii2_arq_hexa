<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151346_inspecciones_resultados_fotos extends Migration
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
            '{{%inspecciones_resultados_fotos}}',
            [
                'id'=> $this->primaryKey(11),
                'resultado_id'=> $this->integer(11)->null()->defaultValue(null),
                'foto'=> $this->text()->notNull(),
                'orden'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_EC80050EFF51ECB6','{{%inspecciones_resultados_fotos}}',['resultado_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_EC80050EFF51ECB6', '{{%inspecciones_resultados_fotos}}');
        $this->dropTable('{{%inspecciones_resultados_fotos}}');
    }
}
