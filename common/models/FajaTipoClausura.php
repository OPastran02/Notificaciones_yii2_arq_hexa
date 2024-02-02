<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%faja_tipo_clausura}}".
 *
 * @property int $id
 * @property string $tipo_clausura
 * @property int|null $habilitado
 *
 * @property DisposicionClausura[] $disposicionClausuras
 */
class FajaTipoClausura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faja_tipo_clausura}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_clausura'], 'required'],
            [['habilitado'], 'integer'],
            [['tipo_clausura'], 'string', 'max' => 20],
            [['tipo_clausura'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_clausura' => 'Tipo Clausura',
            'habilitado' => 'Habilitado',
        ];
    }

    /**
     * Gets query for [[DisposicionClausuras]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicionClausuras()
    {
        return $this->hasMany(DisposicionClausura::class, ['alcance_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FajaTipoClausuraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FajaTipoClausuraQuery(get_called_class());
    }
}
