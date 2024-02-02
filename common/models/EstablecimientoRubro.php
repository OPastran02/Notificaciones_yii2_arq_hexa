<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%establecimientos_rubros}}".
 *
 * @property int $establecimiento_id
 * @property int $rubro_id
 *
 * @property Establecimiento $establecimiento
 * @property Rubro $rubro
 */
class EstablecimientoRubro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%establecimientos_rubros}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['establecimiento_id', 'rubro_id'], 'required'],
            [['establecimiento_id', 'rubro_id'], 'integer'],
            [['establecimiento_id', 'rubro_id'], 'unique', 'targetAttribute' => ['establecimiento_id', 'rubro_id']],
            [['establecimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['establecimiento_id' => 'id']],
            [['rubro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rubro::class, 'targetAttribute' => ['rubro_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'establecimiento_id' => 'Establecimiento ID',
            'rubro_id' => 'Rubro ID',
        ];
    }

    /**
     * Gets query for [[Establecimiento]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimiento()
    {
        return $this->hasOne(Establecimiento::class, ['id' => 'establecimiento_id']);
    }

    /**
     * Gets query for [[Rubro]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RubroQuery
     */
    public function getRubro()
    {
        return $this->hasOne(Rubro::class, ['id' => 'rubro_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EstablecimientoRubroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EstablecimientoRubroQuery(get_called_class());
    }
}
