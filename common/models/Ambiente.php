<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ambiente}}".
 *
 * @property int $id
 * @property string $tipo
 * @property string $ambiente
 */
class Ambiente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ambiente}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'ambiente'], 'required'],
            [['tipo'], 'string', 'max' => 1],
            [['ambiente'], 'string', 'max' => 45],
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
            'ambiente' => 'Ambiente',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AmbienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AmbienteQuery(get_called_class());
    }
}
