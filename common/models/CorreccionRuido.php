<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%correcionRuidos}}".
 *
 * @property float $variacion
 * @property float $delta
 */
class CorreccionRuido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%correcionRuidos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['variacion', 'delta'], 'required'],
            [['variacion', 'delta'], 'number'],
            [['variacion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'variacion' => 'Variacion',
            'delta' => 'Delta',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CorreccionRuidoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CorreccionRuidoQuery(get_called_class());
    }
}
