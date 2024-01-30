<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152833_laboratorio_pedido extends Migration
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
            '{{%laboratorio_pedido}}',
            [
                'id'=> $this->primaryKey(11),
                'programa_id'=> $this->integer(11)->null()->defaultValue(null),
                'tipo_pedido_id'=> $this->integer(11)->null()->defaultValue(null),
                'prioridad_id'=> $this->integer(11)->null()->defaultValue(null),
                'estado_pedido_id'=> $this->integer(11)->null()->defaultValue(null),
                'establecimiento_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_anulador_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_eliminador_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_autorizado_id'=> $this->integer(11)->null()->defaultValue(null),
                'Fecha_Programacion'=> $this->date()->notNull(),
                'anulado'=> $this->tinyInteger(1)->notNull(),
                'eliminado'=> $this->tinyInteger(1)->notNull(),
                'autorizado'=> $this->tinyInteger(1)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_573D9EF8FD8A7328','{{%laboratorio_pedido}}',['programa_id'],false);
        $this->createIndex('IDX_573D9EF8AA3ADA74','{{%laboratorio_pedido}}',['tipo_pedido_id'],false);
        $this->createIndex('IDX_573D9EF8BDD13D7A','{{%laboratorio_pedido}}',['prioridad_id'],false);
        $this->createIndex('IDX_573D9EF8961E0D4C','{{%laboratorio_pedido}}',['estado_pedido_id'],false);
        $this->createIndex('IDX_573D9EF871B61351','{{%laboratorio_pedido}}',['establecimiento_id'],false);
        $this->createIndex('IDX_573D9EF8CD589383','{{%laboratorio_pedido}}',['usuario_anulador_id'],false);
        $this->createIndex('IDX_573D9EF8922C27','{{%laboratorio_pedido}}',['usuario_eliminador_id'],false);
        $this->createIndex('IDX_573D9EF8F4EAFA4C','{{%laboratorio_pedido}}',['usuario_autorizado_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_573D9EF8FD8A7328', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8AA3ADA74', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8BDD13D7A', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8961E0D4C', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF871B61351', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8CD589383', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8922C27', '{{%laboratorio_pedido}}');
        $this->dropIndex('IDX_573D9EF8F4EAFA4C', '{{%laboratorio_pedido}}');
        $this->dropTable('{{%laboratorio_pedido}}');
    }
}
