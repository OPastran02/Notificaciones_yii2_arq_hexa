<?php

use yii\db\Schema;
use yii\db\Migration;

class m240129_171311_cedula extends Migration
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
            '{{%cedula}}',
            [
                'id'=> $this->primaryKey(11),
                'tipo_id'=> $this->integer(11)->null()->defaultValue(null),
                'numero'=> $this->integer(11)->null()->defaultValue(null),
                'nombreDestinatario'=> $this->string(150)->null()->defaultValue(null),
                'actuacion'=> $this->string(100)->null()->defaultValue(null),
                'activar_vencimiento'=> $this->tinyInteger(1)->notNull(),
                'fojas'=> $this->integer(11)->notNull(),
                'cuerpo'=> $this->text()->notNull(),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_7BF39BE0BF396750','{{%cedula}}',['id'],true);
        $this->createIndex('UNIQ_7BF39BE0F55AE19E','{{%cedula}}',['numero'],true);
        $this->createIndex('IDX_7BF39BE0A9276E6C','{{%cedula}}',['tipo_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_7BF39BE0BF396750', '{{%cedula}}');
        $this->dropIndex('UNIQ_7BF39BE0F55AE19E', '{{%cedula}}');
        $this->dropIndex('IDX_7BF39BE0A9276E6C', '{{%cedula}}');
        $this->dropTable('{{%cedula}}');
    }
}
