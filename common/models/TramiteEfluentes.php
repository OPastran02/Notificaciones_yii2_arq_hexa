<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tramite_efluentes}}".
 *
 * @property int $id
 * @property string $tramiteEfluentes
 *
 * @property ResultadosUltimaInspeccion[] $resultadosUltimaInspeccions
 */
class TramiteEfluentes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tramite_efluentes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tramiteEfluentes'], 'required'],
            [['tramiteEfluentes'], 'string', 'max' => 50],
            [['tramiteEfluentes'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tramiteEfluentes' => 'Tramite Efluentes',
        ];
    }

    /**
     * Gets query for [[ResultadosUltimaInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosUltimaInspeccionQuery
     */
    public function getResultadosUltimaInspeccions()
    {
        return $this->hasMany(ResultadosUltimaInspeccion::class, ['tramite_efluentes_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TramiteEfluentesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TramiteEfluentesQuery(get_called_class());
    }
}
