<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%faja_asignacion}}".
 *
 * @property int $id
 * @property int $id_faja
 * @property int|null $id_usuario_inspector_id
 * @property string $fecha_asignacion
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property Faja $faja
 * @property Usuarios $idUsuarioInspector
 */
class FajaAsignacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faja_asignacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_faja', 'fecha_asignacion', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['id_faja', 'id_usuario_inspector_id', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['fecha_asignacion', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['id_faja'], 'exist', 'skipOnError' => true, 'targetClass' => Faja::class, 'targetAttribute' => ['id_faja' => 'id']],
            [['id_usuario_inspector_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['id_usuario_inspector_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_faja' => 'Id Faja',
            'id_usuario_inspector_id' => 'Id Usuario Inspector ID',
            'fecha_asignacion' => 'Fecha Asignacion',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[Faja]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FajaQuery
     */
    public function getFaja()
    {
        return $this->hasOne(Faja::class, ['id' => 'id_faja']);
    }

    /**
     * Gets query for [[IdUsuarioInspector]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getIdUsuarioInspector()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'id_usuario_inspector_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FajaAsignacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FajaAsignacionQuery(get_called_class());
    }
}
