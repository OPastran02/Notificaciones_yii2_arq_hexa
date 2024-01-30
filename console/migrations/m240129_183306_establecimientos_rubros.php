<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_183306_establecimientos_rubros extends Migration
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
            '{{%establecimientos_rubros}}',
            [
                'establecimiento_id'=> $this->integer(11)->notNull(),
                'rubro_id'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_1AEE9E1271B61351','{{%establecimientos_rubros}}',['establecimiento_id'],false);
        $this->createIndex('IDX_1AEE9E1296C5081','{{%establecimientos_rubros}}',['rubro_id'],false);
        $this->addPrimaryKey('pk_on_establecimientos_rubros','{{%establecimientos_rubros}}',['establecimiento_id','rubro_id']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_establecimientos_rubros','{{%establecimientos_rubros}}');
        $this->dropIndex('IDX_1AEE9E1271B61351', '{{%establecimientos_rubros}}');
        $this->dropIndex('IDX_1AEE9E1296C5081', '{{%establecimientos_rubros}}');
        $this->dropTable('{{%establecimientos_rubros}}');
    }
}
