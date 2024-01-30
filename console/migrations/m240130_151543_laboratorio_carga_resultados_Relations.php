<?php

use yii\db\Schema;
use yii\db\Migration;

class m240130_151543_laboratorio_carga_resultados_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_laboratorio_carga_resultados_muestra_id',
            '{{%laboratorio_carga_resultados}}','muestra_id',
            '{{%laboratorio_muestra}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_carga_resultados_legislacion_id',
            '{{%laboratorio_carga_resultados}}','legislacion_id',
            '{{%laboratorio_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_carga_resultados_legislacion_pasivo_id',
            '{{%laboratorio_carga_resultados}}','legislacion_pasivo_id',
            '{{%laboratorio_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_carga_resultados_legislacion_sin_contacto_id',
            '{{%laboratorio_carga_resultados}}','legislacion_sin_contacto_id',
            '{{%laboratorio_legislacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_carga_resultados_determinacion_id',
            '{{%laboratorio_carga_resultados}}','determinacion_id',
            '{{%laboratorio_determinacion}}','id',
            'CASCADE','CASCADE'
         );
        $this->addForeignKey('fk_laboratorio_carga_resultados_usuario_id',
            '{{%laboratorio_carga_resultados}}','usuario_id',
            '{{%usuarios}}','id',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_laboratorio_carga_resultados_muestra_id', '{{%laboratorio_carga_resultados}}');
        $this->dropForeignKey('fk_laboratorio_carga_resultados_legislacion_id', '{{%laboratorio_carga_resultados}}');
        $this->dropForeignKey('fk_laboratorio_carga_resultados_legislacion_pasivo_id', '{{%laboratorio_carga_resultados}}');
        $this->dropForeignKey('fk_laboratorio_carga_resultados_legislacion_sin_contacto_id', '{{%laboratorio_carga_resultados}}');
        $this->dropForeignKey('fk_laboratorio_carga_resultados_determinacion_id', '{{%laboratorio_carga_resultados}}');
        $this->dropForeignKey('fk_laboratorio_carga_resultados_usuario_id', '{{%laboratorio_carga_resultados}}');
    }
}
