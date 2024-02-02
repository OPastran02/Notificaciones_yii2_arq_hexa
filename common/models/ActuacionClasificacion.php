<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%actuacion_clasificacion}}".
 *
 * @property int $id
 * @property string $tipo
 *
 * @property Actuacion[] $actuacions
 */
class ActuacionClasificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%actuacion_clasificacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo'], 'required'],
            [['tipo'], 'string', 'max' => 50],
            [['tipo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * Gets query for [[Actuacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActuacionQuery
     */
    public function getActuacions()
    {
        return $this->hasMany(Actuacion::class, ['clasificacion_actuacion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActuacionClasificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActuacionClasificacionQuery(get_called_class());
    }
}
