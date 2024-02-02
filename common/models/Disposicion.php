<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%disposicion}}".
 *
 * @property int $id
 * @property int|null $reparticion_id
 * @property int|null $tipo_id
 * @property int $numero
 * @property int $anio
 * @property int|null $requiereInspector
 *
 * @property DisposicionClausura $disposicionClausura
 */
class Disposicion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%disposicion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'numero', 'anio'], 'required'],
            [['id', 'reparticion_id', 'tipo_id', 'numero', 'anio', 'requiereInspector'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reparticion_id' => 'Reparticion ID',
            'tipo_id' => 'Tipo ID',
            'numero' => 'Numero',
            'anio' => 'Anio',
            'requiereInspector' => 'Requiere Inspector',
        ];
    }

    /**
     * Gets query for [[DisposicionClausura]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicionClausura()
    {
        return $this->hasOne(DisposicionClausura::class, ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DisposicionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DisposicionQuery(get_called_class());
    }
}
