<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_184110_historial extends Migration
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
            '{{%historial}}',
            [
                'id'=> $this->primaryKey(11),
                'usuario_motificador_id'=> $this->integer(11)->null()->defaultValue(null),
                'idTabla'=> $this->integer(11)->notNull(),
                'tabla'=> $this->string(150)->notNull(),
                'campo'=> $this->string(150)->notNull(),
                'fecha'=> $this->datetime()->notNull(),
                'valorAnterior'=> $this->text()->notNull(),
                'valorNuevo'=> $this->text()->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_2695065221FAAD01','{{%historial}}',['usuario_motificador_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_2695065221FAAD01', '{{%historial}}');
        $this->dropTable('{{%historial}}');
    }
}
