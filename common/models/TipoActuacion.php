<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_actuacion}}".
 *
 * @property int $id
 * @property string $tipoActuacion
 *
 * @property Actuacion[] $actuacions
 * @property DisposicionClausura[] $disposicionClausuras
 */
class TipoActuacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_actuacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipoActuacion'], 'required'],
            [['tipoActuacion'], 'string', 'max' => 2],
            [['tipoActuacion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipoActuacion' => 'Tipo Actuacion',
        ];
    }

    /**
     * Gets query for [[Actuacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActuacionQuery
     */
    public function getActuacions()
    {
        return $this->hasMany(Actuacion::class, ['tipo_id' => 'id']);
    }

    /**
     * Gets query for [[DisposicionClausuras]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicionClausuras()
    {
        return $this->hasMany(DisposicionClausura::class, ['tipo_actuacion_remicion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TipoActuacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipoActuacionQuery(get_called_class());
    }
}
