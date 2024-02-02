<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%establecimientos_razonessociales}}".
 *
 * @property int $establecimiento_id
 * @property int $razon_social_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $fecha_creado
 * @property int $id_usuariocreador
 *
 * @property Establecimiento $establecimiento
 * @property RazonSocial $razonSocial
 */
class EstablecimientosRazonSocial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%establecimientos_razonessociales}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['establecimiento_id', 'razon_social_id', 'fecha_inicio', 'fecha_fin', 'fecha_creado', 'id_usuariocreador'], 'required'],
            [['establecimiento_id', 'razon_social_id', 'id_usuariocreador'], 'integer'],
            [['fecha_inicio', 'fecha_fin', 'fecha_creado'], 'safe'],
            [['establecimiento_id', 'razon_social_id'], 'unique', 'targetAttribute' => ['establecimiento_id', 'razon_social_id']],
            [['establecimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['establecimiento_id' => 'id']],
            [['razon_social_id'], 'exist', 'skipOnError' => true, 'targetClass' => RazonSocial::class, 'targetAttribute' => ['razon_social_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'establecimiento_id' => 'Establecimiento ID',
            'razon_social_id' => 'Razon Social ID',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'fecha_creado' => 'Fecha Creado',
            'id_usuariocreador' => 'Id Usuariocreador',
        ];
    }

    /**
     * Gets query for [[Establecimiento]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimiento()
    {
        return $this->hasOne(Establecimiento::class, ['id' => 'establecimiento_id']);
    }

    /**
     * Gets query for [[RazonSocial]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RazonSocialQuery
     */
    public function getRazonSocial()
    {
        return $this->hasOne(RazonSocial::class, ['id' => 'razon_social_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EstablecimientosRazonSocialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EstablecimientosRazonSocialQuery(get_called_class());
    }
}
