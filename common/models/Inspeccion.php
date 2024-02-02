<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%inspeccion}}".
 *
 * @property int $id
 * @property int $orden_inspeccion_id
 * @property string|null $fecha_programado
 * @property string|null $fecha_inspeccion
 * @property string|null $fecha_recepcion
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property InspeccionUsuario[] $inspeccionUsuarios
 * @property Usuarios[] $usuarios
 */
class Inspeccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%inspeccion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orden_inspeccion_id', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['orden_inspeccion_id', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['fecha_programado', 'fecha_inspeccion', 'fecha_recepcion', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orden_inspeccion_id' => 'Orden Inspeccion ID',
            'fecha_programado' => 'Fecha Programado',
            'fecha_inspeccion' => 'Fecha Inspeccion',
            'fecha_recepcion' => 'Fecha Recepcion',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[InspeccionUsuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\InspeccionUsuarioQuery
     */
    public function getInspeccionUsuarios()
    {
        return $this->hasMany(InspeccionUsuario::class, ['inspeccion_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id' => 'usuario_id'])->viaTable('{{%inspeccion_usuario}}', ['inspeccion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InspeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InspeccionQuery(get_called_class());
    }
}
