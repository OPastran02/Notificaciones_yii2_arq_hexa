<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%rubro}}".
 *
 * @property int $id
 * @property string $Rubro
 * @property string $Codigo
 *
 * @property Establecimiento[] $establecimientos
 * @property EstablecimientosRubros[] $establecimientosRubros
 */
class Rubro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%rubro}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Rubro', 'Codigo'], 'required'],
            [['Rubro'], 'string'],
            [['Codigo'], 'string', 'max' => 8],
            [['Codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Rubro' => 'Rubro',
            'Codigo' => 'Codigo',
        ];
    }

    /**
     * Gets query for [[Establecimientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimientos()
    {
        return $this->hasMany(Establecimiento::class, ['id' => 'establecimiento_id'])->viaTable('{{%establecimientos_rubros}}', ['rubro_id' => 'id']);
    }

    /**
     * Gets query for [[EstablecimientosRubros]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientosRubrosQuery
     */
    public function getEstablecimientosRubros()
    {
        return $this->hasMany(EstablecimientosRubros::class, ['rubro_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RubroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RubroQuery(get_called_class());
    }
}
