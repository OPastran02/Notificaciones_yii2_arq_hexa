<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_154510_notificacion extends Migration
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
            '{{%notificacion}}',
            [
                'id'=> $this->primaryKey(11),
                'id_pedido'=> $this->integer(11)->notNull(),
                'establecimiento_id'=> $this->integer(11)->notNull(),
                'notificador_id'=> $this->integer(11)->null()->defaultValue(null),
                'estado_id'=> $this->integer(11)->null()->defaultValue(null),
                'plazo1'=> $this->integer(11)->notNull(),
                'plazo2'=> $this->integer(11)->notNull(),
                'fecha_entrega'=> $this->date()->null()->defaultValue(null),
                'fecha_devolucion'=> $this->date()->null()->defaultValue(null),
                'fecha_notificacion'=> $this->date()->null()->defaultValue(null),
                'fecha_envio_firma'=> $this->date()->null()->defaultValue(null),
                'fecha_vuelta_firma'=> $this->date()->null()->defaultValue(null),
                'usuario_modificador'=> $this->integer(11)->notNull(),
                'fecha_modificado'=> $this->date()->notNull(),
                'prorroga'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'presentacion_agregar'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'art61'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'citacion'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'nocturnidad'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'observaciones'=> $this->text()->null()->defaultValue(null),
                'direccion_notificada'=> $this->string(100)->notNull(),
                'comuna_notificada'=> $this->smallInteger(6)->notNull(),
                'tipo_domicilio_notificado'=> $this->string(1)->notNull(),
                'Lon'=> $this->double()->notNull(),
                'Lat'=> $this->double()->notNull(),
                'usuario_eliminador'=> $this->integer(11)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('IDX_729A19ECE2DBA323','{{%notificacion}}',['id_pedido'],false);
        $this->createIndex('IDX_729A19EC71B61351','{{%notificacion}}',['establecimiento_id'],false);
        $this->createIndex('IDX_729A19EC3C06C417','{{%notificacion}}',['notificador_id'],false);
        $this->createIndex('IDX_729A19EC9F5A440B','{{%notificacion}}',['estado_id'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('IDX_729A19ECE2DBA323', '{{%notificacion}}');
        $this->dropIndex('IDX_729A19EC71B61351', '{{%notificacion}}');
        $this->dropIndex('IDX_729A19EC3C06C417', '{{%notificacion}}');
        $this->dropIndex('IDX_729A19EC9F5A440B', '{{%notificacion}}');
        $this->dropTable('{{%notificacion}}');
    }
}
