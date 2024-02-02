<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_cedula}}".
 *
 * @property int $id
 * @property string $TipoCedula
 *
 * @property Cedula[] $cedulas
 */
class TipoCedula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_cedula}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TipoCedula'], 'required'],
            [['TipoCedula'], 'string', 'max' => 50],
            [['TipoCedula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TipoCedula' => 'Tipo Cedula',
        ];
    }

    /**
     * Gets query for [[Cedulas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CedulaQuery
     */
    public function getCedulas()
    {
        return $this->hasMany(Cedula::class, ['tipo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TipoCedulaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipoCedulaQuery(get_called_class());
    }
}
