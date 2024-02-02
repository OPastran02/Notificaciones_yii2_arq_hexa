<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta_estado}}".
 *
 * @property int $id
 * @property string $estado
 */
class ActaEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta_estado}}';
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
     * @return \common\models\query\ActaEstadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaEstadoQuery(get_called_class());
    }
}
