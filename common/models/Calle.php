<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%calles}}".
 *
 * @property int $id
 * @property string $Calle
 *
 * @property DireccionRs[] $direccionRs
 * @property Direccion[] $direccions
 */
class Calle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%calles}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Calle'], 'required'],
            [['Calle'], 'string', 'max' => 70],
            [['Calle'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Calle' => 'Calle',
        ];
    }

    /**
     * Gets query for [[DireccionRs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DireccionRsQuery
     */
    public function getDireccionRs()
    {
        return $this->hasMany(DireccionRs::class, ['Id_Calle' => 'id']);
    }

    /**
     * Gets query for [[Direccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DireccionQuery
     */
    public function getDireccions()
    {
        return $this->hasMany(Direccion::class, ['Id_Calle' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CalleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CalleQuery(get_called_class());
    }
}
