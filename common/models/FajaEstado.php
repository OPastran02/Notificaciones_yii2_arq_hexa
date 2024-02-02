<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%faja_estado}}".
 *
 * @property int $id
 * @property string $estado
 */
class FajaEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faja_estado}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado'], 'required'],
            [['estado'], 'string', 'max' => 20],
            [['estado'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FajaEstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FajaEstadoQuery(get_called_class());
    }
}
