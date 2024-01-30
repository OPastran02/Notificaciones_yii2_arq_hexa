<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154947_resultadosultimainspeccion_tiporesiduos extends Migration
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
            '{{%resultadosultimainspeccion_tiporesiduos}}',
            [
                'resultadosUltimaInspeccion_id'=> $this->integer(11)->notNull(),
                'tipoResiduo_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_A18321EF9E7D6DC2','{{%resultadosultimainspeccion_tiporesiduos}}',['resultadosUltimaInspeccion_id'],false);
        $this->createIndex('IDX_A18321EF838EA27A','{{%resultadosultimainspeccion_tiporesiduos}}',['tipoResiduo_id'],false);
        $this->addPrimaryKey('pk_on_resultadosultimainspeccion_tiporesiduos','{{%resultadosultimainspeccion_tiporesiduos}}',['resultadosUltimaInspeccion_id','tipoResiduo_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_resultadosultimainspeccion_tiporesiduos','{{%resultadosultimainspeccion_tiporesiduos}}');
        $this->dropIndex('IDX_A18321EF9E7D6DC2', '{{%resultadosultimainspeccion_tiporesiduos}}');
        $this->dropIndex('IDX_A18321EF838EA27A', '{{%resultadosultimainspeccion_tiporesiduos}}');
        $this->dropTable('{{%resultadosultimainspeccion_tiporesiduos}}');
    }
}
