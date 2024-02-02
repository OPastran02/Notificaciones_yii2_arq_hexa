<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%motivo_inspeccion}}".
 *
 * @property int $id
 * @property string $motivo
 *
 * @property OrdenInspeccion[] $ordenInspeccions
 */
class MotivoInspeccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%motivo_inspeccion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motivo'], 'required'],
            [['motivo'], 'string', 'max' => 60],
            [['motivo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'motivo' => 'Motivo',
        ];
    }

    /**
     * Gets query for [[OrdenInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccions()
    {
        return $this->hasMany(OrdenInspeccion::class, ['motivo_inspeccion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\MotivoInspeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MotivoInspeccionQuery(get_called_class());
    }
}
