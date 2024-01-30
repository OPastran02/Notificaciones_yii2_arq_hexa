<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155343_tipo_residuos extends Migration
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
            '{{%tipo_residuos}}',
            [
                'id'=> $this->primaryKey(11),
                'codigoResiduo'=> $this->string(5)->notNull(),
                'tipoResiduo'=> $this->string(150)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_509F875DCE094176','{{%tipo_residuos}}',['codigoResiduo'],true);
        $this->createIndex('UNIQ_509F875D25521882','{{%tipo_residuos}}',['tipoResiduo'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_509F875DCE094176', '{{%tipo_residuos}}');
        $this->dropIndex('UNIQ_509F875D25521882', '{{%tipo_residuos}}');
        $this->dropTable('{{%tipo_residuos}}');
    }
}
