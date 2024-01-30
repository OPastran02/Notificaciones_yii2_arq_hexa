<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154803_pedido extends Migration
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
            '{{%pedido}}',
            [
                'id'=> $this->primaryKey(11),
                'usuario_autorizador_id'=> $this->integer(11)->null()->defaultValue(null),
                'fecha_creado'=> $this->date()->notNull(),
                'usuario_creador'=> $this->integer(11)->notNull(),
                'fecha_autorizado'=> $this->date()->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_C4EC16CE20533D01','{{%pedido}}',['usuario_autorizador_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_C4EC16CE20533D01', '{{%pedido}}');
        $this->dropTable('{{%pedido}}');
    }
}
