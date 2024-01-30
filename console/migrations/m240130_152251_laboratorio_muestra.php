<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_152251_laboratorio_muestra extends Migration
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
            '{{%laboratorio_muestra}}',
            [
                'id'=> $this->primaryKey(11),
                'pedido_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_supervisador_id'=> $this->integer(11)->null()->defaultValue(null),
                'usuario_autorizador_id'=> $this->integer(11)->null()->defaultValue(null),
                'supervisado'=> $this->tinyInteger(1)->notNull(),
                'autorizado'=> $this->tinyInteger(1)->notNull(),
                'anulada'=> $this->tinyInteger(1)->notNull(),
                'fecha_toma_muestra'=> $this->date()->null()->defaultValue(null),
                'lugarExtraccion'=> $this->string(70)->null()->defaultValue(null),
                'numeroMuestra'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );
        $this->createIndex('IDX_BFD757414854653A','{{%laboratorio_muestra}}',['pedido_id'],false);
        $this->createIndex('IDX_BFD7574133790B12','{{%laboratorio_muestra}}',['usuario_supervisador_id'],false);
        $this->createIndex('IDX_BFD7574120533D01','{{%laboratorio_muestra}}',['usuario_autorizador_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_BFD757414854653A', '{{%laboratorio_muestra}}');
        $this->dropIndex('IDX_BFD7574133790B12', '{{%laboratorio_muestra}}');
        $this->dropIndex('IDX_BFD7574120533D01', '{{%laboratorio_muestra}}');
        $this->dropTable('{{%laboratorio_muestra}}');
    }
}
