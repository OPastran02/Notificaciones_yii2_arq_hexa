<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%resultadosultimainspeccion_tiporesiduos}}".
 *
 * @property int $resultadosUltimaInspeccion_id
 * @property int $tipoResiduo_id
 *
 * @property ResultadosUltimaInspeccion $resultadosUltimaInspeccion
 * @property TipoResiduos $tipoResiduo
 */
class ResultadosUltimaInspeccionTipoResiduo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%resultadosultimainspeccion_tiporesiduos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resultadosUltimaInspeccion_id', 'tipoResiduo_id'], 'required'],
            [['resultadosUltimaInspeccion_id', 'tipoResiduo_id'], 'integer'],
            [['resultadosUltimaInspeccion_id', 'tipoResiduo_id'], 'unique', 'targetAttribute' => ['resultadosUltimaInspeccion_id', 'tipoResiduo_id']],
            [['tipoResiduo_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoResiduos::class, 'targetAttribute' => ['tipoResiduo_id' => 'id']],
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
            'tipoResiduo_id' => 'Tipo Residuo ID',
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
     * Gets query for [[TipoResiduo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoResiduosQuery
     */
    public function getTipoResiduo()
    {
        return $this->hasOne(TipoResiduos::class, ['id' => 'tipoResiduo_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ResultadosUltimaInspeccionTipoResiduoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ResultadosUltimaInspeccionTipoResiduoQuery(get_called_class());
    }
}
