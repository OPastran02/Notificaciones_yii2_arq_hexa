<?php

use yii\db\Schema;
use yii\db\Migration;

class m240201_012926_usuarios extends Migration
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
            '{{%usuarios}}',
            [
                'id'=> $this->primaryKey(11),
                'username'=> $this->string(15)->null()->defaultValue(null),
                'password'=> $this->string(60)->null()->defaultValue(null),
                'nombre'=> $this->string(25)->null()->defaultValue(null),
                'apellido'=> $this->string(25)->null()->defaultValue(null),
                'sistemaNotificaciones'=> $this->smallInteger(6)->null()->defaultValue(null),
                'idArea'=> $this->smallInteger(6)->null()->defaultValue(null),
                'pedidos'=> $this->smallInteger(6)->null()->defaultValue(null),
                'establecimientos'=> $this->smallInteger(6)->null()->defaultValue(null),
                'inbox'=> $this->smallInteger(6)->null()->defaultValue(null),
                'antecedentes'=> $this->smallInteger(6)->null()->defaultValue(null),
                'programacion'=> $this->smallInteger(6)->null()->defaultValue(null),
                'documentacion'=> $this->smallInteger(6)->null()->defaultValue(null),
                'actasYFajas'=> $this->smallInteger(6)->null()->defaultValue(null),
                'cargaMasivaCedulas'=> $this->smallInteger(6)->null()->defaultValue(null),
                'ipUsuario'=> $this->string(17)->null()->defaultValue(null),
                'nivelTablet'=> $this->smallInteger(6)->null()->defaultValue(null),
                'nivelPatrulla'=> $this->smallInteger(6)->null()->defaultValue(null),
                'rni'=> $this->smallInteger(6)->null()->defaultValue(null),
                'habilitado'=> $this->tinyInteger(1)->null()->defaultValue(null),
                'ultimaConexion'=> $this->date()->null()->defaultValue(null),
                'Fecha_Creado'=> $this->date()->null()->defaultValue(null),
                'Id_Usuario_Creador'=> $this->integer(11)->null()->defaultValue(null),
                'Fecha_Modificado'=> $this->date()->null()->defaultValue(null),
                'Id_Usuario_Modificador'=> $this->integer(11)->null()->defaultValue(null),
                'laboratorio'=> $this->integer(11)->null()->defaultValue(null),
                'password_hash'=> $this->text()->null()->defaultValue(null),
                'password_reset_token'=> $this->text()->null()->defaultValue(null),
                'codigo_imei'=> $this->string(45)->null()->defaultValue(null),
                'codigo_serie'=> $this->string(45)->null()->defaultValue(null),
                'verification_token'=> $this->text()->null()->defaultValue(null),
                'email'=> $this->text()->null()->defaultValue(null),
                'auth_key'=> $this->text()->null()->defaultValue(null),
                'auth_key_column'=> $this->smallInteger(6)->null()->defaultValue(null),
                'status'=> $this->smallInteger(6)->null()->defaultValue(null),
                'created_at'=> $this->integer(20)->null()->defaultValue(null),
                'updated_at'=> $this->integer(20)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_EF687F22265B05D','{{%usuarios}}',['username'],true);
        $this->createIndex('IDX_EF687F2A46963F6','{{%usuarios}}',['idArea'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_EF687F22265B05D', '{{%usuarios}}');
        $this->dropIndex('IDX_EF687F2A46963F6', '{{%usuarios}}');
        $this->dropTable('{{%usuarios}}');
    }
}
