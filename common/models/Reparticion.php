<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%reparticion}}".
 *
 * @property int $id
 * @property string $reparticion
 * @property int|null $prioridad
 *
 * @property Actuacion[] $actuacions
 * @property Controladores[] $controladores
 */
class Reparticion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%reparticion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reparticion'], 'required'],
            [['prioridad'], 'integer'],
            [['reparticion'], 'string', 'max' => 50],
            [['reparticion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reparticion' => 'Reparticion',
            'prioridad' => 'Prioridad',
        ];
    }

    /**
     * Gets query for [[Actuacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActuacionQuery
     */
    public function getActuacions()
    {
        return $this->hasMany(Actuacion::class, ['reparticion_id' => 'id']);
    }

    /**
     * Gets query for [[Controladores]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ControladoresQuery
     */
    public function getControladores()
    {
        return $this->hasMany(Controladores::class, ['reparticion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ReparticionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ReparticionQuery(get_called_class());
    }
}
