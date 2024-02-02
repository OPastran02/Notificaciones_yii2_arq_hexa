<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%motivos_re_inspeccion}}".
 *
 * @property int $id
 * @property int|null $orden_inspeccion_id
 * @property string $motivo
 * @property int $gofa
 * @property string $Fecha_Creado
 * @property int $desestimar_reinspeccion
 * @property int|null $Id_Usuario_Creador
 *
 * @property OrdenInspeccion $ordenInspeccion
 * @property Usuarios $usuarioCreador
 */
class MotivoReinspeccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%motivos_re_inspeccion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orden_inspeccion_id', 'gofa', 'desestimar_reinspeccion', 'Id_Usuario_Creador'], 'integer'],
            [['motivo', 'gofa', 'Fecha_Creado', 'desestimar_reinspeccion'], 'required'],
            [['Fecha_Creado'], 'safe'],
            [['motivo'], 'string', 'max' => 2500],
            [['Id_Usuario_Creador'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['Id_Usuario_Creador' => 'id']],
            [['orden_inspeccion_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrdenInspeccion::class, 'targetAttribute' => ['orden_inspeccion_id' => 'id']],
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
            'motivo' => 'Motivo',
            'gofa' => 'Gofa',
            'Fecha_Creado' => 'Fecha Creado',
            'desestimar_reinspeccion' => 'Desestimar Reinspeccion',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
        ];
    }

    /**
     * Gets query for [[OrdenInspeccion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccion()
    {
        return $this->hasOne(OrdenInspeccion::class, ['id' => 'orden_inspeccion_id']);
    }

    /**
     * Gets query for [[UsuarioCreador]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarioCreador()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'Id_Usuario_Creador']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MotivoReinspeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MotivoReinspeccionQuery(get_called_class());
    }
}
