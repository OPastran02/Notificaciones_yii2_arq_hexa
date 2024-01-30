<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155100_resultadosultimainspeccion_tipotratamiento extends Migration
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
            '{{%resultadosultimainspeccion_tipotratamiento}}',
            [
                'resultadosUltimaInspeccion_id'=> $this->integer(11)->notNull(),
                'tipoTratamiento_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_7E06E32B9E7D6DC2','{{%resultadosultimainspeccion_tipotratamiento}}',['resultadosUltimaInspeccion_id'],false);
        $this->createIndex('IDX_7E06E32B2691E4D5','{{%resultadosultimainspeccion_tipotratamiento}}',['tipoTratamiento_id'],false);
        $this->addPrimaryKey('pk_on_resultadosultimainspeccion_tipotratamiento','{{%resultadosultimainspeccion_tipotratamiento}}',['resultadosUltimaInspeccion_id','tipoTratamiento_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_resultadosultimainspeccion_tipotratamiento','{{%resultadosultimainspeccion_tipotratamiento}}');
        $this->dropIndex('IDX_7E06E32B9E7D6DC2', '{{%resultadosultimainspeccion_tipotratamiento}}');
        $this->dropIndex('IDX_7E06E32B2691E4D5', '{{%resultadosultimainspeccion_tipotratamiento}}');
        $this->dropTable('{{%resultadosultimainspeccion_tipotratamiento}}');
    }
}
