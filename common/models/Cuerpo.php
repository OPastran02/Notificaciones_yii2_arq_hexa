<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cuerpo}}".
 *
 * @property int $id
 * @property string $Nombre
 * @property string $Cuerpo
 */
class Cuerpo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cuerpo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Cuerpo'], 'required'],
            [['Cuerpo'], 'string'],
            [['Nombre'], 'string', 'max' => 100],
            [['Nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Cuerpo' => 'Cuerpo',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CuerpoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CuerpoQuery(get_called_class());
    }
}
