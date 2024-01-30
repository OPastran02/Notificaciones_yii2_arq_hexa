<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183223_establecimientos_razonessociales extends Migration
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
            '{{%establecimientos_razonessociales}}',
            [
                'establecimiento_id'=> $this->integer(11)->notNull(),
                'razon_social_id'=> $this->integer(11)->notNull(),
                'fecha_inicio'=> $this->date()->notNull(),
                'fecha_fin'=> $this->date()->notNull(),
                'fecha_creado'=> $this->date()->notNull(),
                'id_usuariocreador'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_D8E8007171B61351','{{%establecimientos_razonessociales}}',['establecimiento_id'],false);
        $this->createIndex('IDX_D8E80071E1E9C02C','{{%establecimientos_razonessociales}}',['razon_social_id'],false);
        $this->addPrimaryKey('pk_on_establecimientos_razonessociales','{{%establecimientos_razonessociales}}',['establecimiento_id','razon_social_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_establecimientos_razonessociales','{{%establecimientos_razonessociales}}');
        $this->dropIndex('IDX_D8E8007171B61351', '{{%establecimientos_razonessociales}}');
        $this->dropIndex('IDX_D8E80071E1E9C02C', '{{%establecimientos_razonessociales}}');
        $this->dropTable('{{%establecimientos_razonessociales}}');
    }
}
