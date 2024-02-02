<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%circuito}}".
 *
 * @property int $id
 * @property string $circuito
 *
 * @property OrdenInspeccion[] $ordenInspeccions
 */
class Circuito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%circuito}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['circuito'], 'required'],
            [['circuito'], 'string', 'max' => 50],
            [['circuito'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'circuito' => 'Circuito',
        ];
    }

    /**
     * Gets query for [[OrdenInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccions()
    {
        return $this->hasMany(OrdenInspeccion::class, ['circuito_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CircuitoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CircuitoQuery(get_called_class());
    }
}
