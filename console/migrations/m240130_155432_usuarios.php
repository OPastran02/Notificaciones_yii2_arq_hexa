<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_155432_usuarios extends Migration
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
                'usuario'=> $this->string(15)->notNull(),
                'password'=> $this->string(60)->notNull(),
                'nombre'=> $this->string(25)->notNull(),
                'apellido'=> $this->string(25)->notNull(),
                'sistemaNotificaciones'=> $this->smallInteger(6)->notNull(),
                'idArea'=> $this->smallInteger(6)->notNull(),
                'pedidos'=> $this->smallInteger(6)->notNull(),
                'establecimientos'=> $this->smallInteger(6)->notNull(),
                'inbox'=> $this->smallInteger(6)->notNull(),
                'antecedentes'=> $this->smallInteger(6)->notNull(),
                'programacion'=> $this->smallInteger(6)->notNull(),
                'documentacion'=> $this->smallInteger(6)->notNull(),
                'actasYFajas'=> $this->smallInteger(6)->notNull(),
                'cargaMasivaCedulas'=> $this->smallInteger(6)->notNull(),
                'ipUsuario'=> $this->string(17)->null()->defaultValue(null),
                'nivelTablet'=> $this->smallInteger(6)->notNull(),
                'nivelPatrulla'=> $this->smallInteger(6)->notNull(),
                'rni'=> $this->smallInteger(6)->notNull(),
                'habilitado'=> $this->tinyInteger(1)->notNull(),
                'ultimaConexion'=> $this->date()->notNull(),
                'Fecha_Creado'=> $this->date()->notNull(),
                'Id_Usuario_Creador'=> $this->integer(11)->notNull(),
                'Fecha_Modificado'=> $this->date()->notNull(),
                'Id_Usuario_Modificador'=> $this->integer(11)->notNull(),
                'laboratorio'=> $this->integer(11)->notNull(),
                'access_token'=> $this->text()->null()->defaultValue(null),
                'access_token_apk'=> $this->text()->null()->defaultValue(null),
                'codigo_imei'=> $this->string(45)->null()->defaultValue(null),
                'codigo_serie'=> $this->string(45)->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('UNIQ_EF687F22265B05D','{{%usuarios}}',['usuario'],true);
        $this->createIndex('IDX_EF687F2A46963F6','{{%usuarios}}',['idArea'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('UNIQ_EF687F22265B05D', '{{%usuarios}}');
        $this->dropIndex('IDX_EF687F2A46963F6', '{{%usuarios}}');
        $this->dropTable('{{%usuarios}}');
    }
}
