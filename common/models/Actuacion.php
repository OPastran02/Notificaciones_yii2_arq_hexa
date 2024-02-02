<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%actuacion}}".
 *
 * @property int $tipo_id
 * @property int $numero
 * @property int $reparticion_id
 * @property int $anio
 * @property int $Id_Establecimiento
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property int|null $clasificacion_actuacion_id
 *
 * @property ActuacionClasificacion $clasificacionActuacion
 * @property Establecimiento $establecimiento
 * @property Reparticion $reparticion
 * @property TipoActuacion $tipo
 */
class Actuacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%actuacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_id', 'numero', 'reparticion_id', 'anio', 'Id_Establecimiento', 'Fecha_Creado', 'Id_Usuario_Creador'], 'required'],
            [['tipo_id', 'numero', 'reparticion_id', 'anio', 'Id_Establecimiento', 'Id_Usuario_Creador', 'clasificacion_actuacion_id'], 'integer'],
            [['Fecha_Creado'], 'safe'],
            [['tipo_id', 'numero', 'reparticion_id', 'anio'], 'unique', 'targetAttribute' => ['tipo_id', 'numero', 'reparticion_id', 'anio']],
            [['reparticion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reparticion::class, 'targetAttribute' => ['reparticion_id' => 'id']],
            [['Id_Establecimiento'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['Id_Establecimiento' => 'id']],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoActuacion::class, 'targetAttribute' => ['tipo_id' => 'id']],
            [['clasificacion_actuacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => ActuacionClasificacion::class, 'targetAttribute' => ['clasificacion_actuacion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tipo_id' => 'Tipo ID',
            'numero' => 'Numero',
            'reparticion_id' => 'Reparticion ID',
            'anio' => 'Anio',
            'Id_Establecimiento' => 'Id Establecimiento',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'clasificacion_actuacion_id' => 'Clasificacion Actuacion ID',
        ];
    }

    /**
     * Gets query for [[ClasificacionActuacion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActuacionClasificacionQuery
     */
    public function getClasificacionActuacion()
    {
        return $this->hasOne(ActuacionClasificacion::class, ['id' => 'clasificacion_actuacion_id']);
    }

    /**
     * Gets query for [[Establecimiento]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimiento()
    {
        return $this->hasOne(Establecimiento::class, ['id' => 'Id_Establecimiento']);
    }

    /**
     * Gets query for [[Reparticion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ReparticionQuery
     */
    public function getReparticion()
    {
        return $this->hasOne(Reparticion::class, ['id' => 'reparticion_id']);
    }

    /**
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoActuacionQuery
     */
    public function getTipo()
    {
        return $this->hasOne(TipoActuacion::class, ['id' => 'tipo_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActuacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActuacionQuery(get_called_class());
    }
}
