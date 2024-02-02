<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%resultadosultimainspeccion_tipotratamiento}}".
 *
 * @property int $resultadosUltimaInspeccion_id
 * @property int $tipoTratamiento_id
 *
 * @property ResultadosUltimaInspeccion $resultadosUltimaInspeccion
 * @property TipoTratamiento $tipoTratamiento
 */
class ResultadosUltimaInspeccionTipoTratamiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%resultadosultimainspeccion_tipotratamiento}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resultadosUltimaInspeccion_id', 'tipoTratamiento_id'], 'required'],
            [['resultadosUltimaInspeccion_id', 'tipoTratamiento_id'], 'integer'],
            [['resultadosUltimaInspeccion_id', 'tipoTratamiento_id'], 'unique', 'targetAttribute' => ['resultadosUltimaInspeccion_id', 'tipoTratamiento_id']],
            [['tipoTratamiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoTratamiento::class, 'targetAttribute' => ['tipoTratamiento_id' => 'id']],
            [['resultadosUltimaInspeccion_id'], 'exist', 'skipOnError' => true, 'targetClass' => ResultadosUltimaInspeccion::class, 'targetAttribute' => ['resultadosUltimaInspeccion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resultadosUltimaInspeccion_id' => 'Resultados Ultima Inspeccion ID',
            'tipoTratamiento_id' => 'Tipo Tratamiento ID',
        ];
    }

    /**
     * Gets query for [[ResultadosUltimaInspeccion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosUltimaInspeccionQuery
     */
    public function getResultadosUltimaInspeccion()
    {
        return $this->hasOne(ResultadosUltimaInspeccion::class, ['id' => 'resultadosUltimaInspeccion_id']);
    }

    /**
     * Gets query for [[TipoTratamiento]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoTratamientoQuery
     */
    public function getTipoTratamiento()
    {
        return $this->hasOne(TipoTratamiento::class, ['id' => 'tipoTratamiento_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ResultadosUltimaInspeccionTipoTratamientoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ResultadosUltimaInspeccionTipoTratamientoQuery(get_called_class());
    }
}
