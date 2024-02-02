<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_tratamiento}}".
 *
 * @property int $id
 * @property string $tipoTratamiento
 *
 * @property ResultadosUltimaInspeccion[] $resultadosUltimaInspeccions
 * @property ResultadosultimainspeccionTipotratamiento[] $resultadosultimainspeccionTipotratamientos
 */
class Tipotratamiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_tratamiento}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipoTratamiento'], 'required'],
            [['tipoTratamiento'], 'string', 'max' => 50],
            [['tipoTratamiento'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipoTratamiento' => 'Tipo Tratamiento',
        ];
    }

    /**
     * Gets query for [[ResultadosUltimaInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosUltimaInspeccionQuery
     */
    public function getResultadosUltimaInspeccions()
    {
        return $this->hasMany(ResultadosUltimaInspeccion::class, ['id' => 'resultadosUltimaInspeccion_id'])->viaTable('{{%resultadosultimainspeccion_tipotratamiento}}', ['tipoTratamiento_id' => 'id']);
    }

    /**
     * Gets query for [[ResultadosultimainspeccionTipotratamientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosultimainspeccionTipotratamientoQuery
     */
    public function getResultadosultimainspeccionTipotratamientos()
    {
        return $this->hasMany(ResultadosultimainspeccionTipotratamiento::class, ['tipoTratamiento_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TipotratamientoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipotratamientoQuery(get_called_class());
    }
}
