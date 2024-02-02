<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tipo_residuos}}".
 *
 * @property int $id
 * @property string $codigoResiduo
 * @property string $tipoResiduo
 *
 * @property ResultadosUltimaInspeccion[] $resultadosUltimaInspeccions
 * @property ResultadosultimainspeccionTiporesiduos[] $resultadosultimainspeccionTiporesiduos
 */
class TipoResiduo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tipo_residuos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigoResiduo', 'tipoResiduo'], 'required'],
            [['codigoResiduo'], 'string', 'max' => 5],
            [['tipoResiduo'], 'string', 'max' => 150],
            [['codigoResiduo'], 'unique'],
            [['tipoResiduo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigoResiduo' => 'Codigo Residuo',
            'tipoResiduo' => 'Tipo Residuo',
        ];
    }

    /**
     * Gets query for [[ResultadosUltimaInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosUltimaInspeccionQuery
     */
    public function getResultadosUltimaInspeccions()
    {
        return $this->hasMany(ResultadosUltimaInspeccion::class, ['id' => 'resultadosUltimaInspeccion_id'])->viaTable('{{%resultadosultimainspeccion_tiporesiduos}}', ['tipoResiduo_id' => 'id']);
    }

    /**
     * Gets query for [[ResultadosultimainspeccionTiporesiduos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosultimainspeccionTiporesiduosQuery
     */
    public function getResultadosultimainspeccionTiporesiduos()
    {
        return $this->hasMany(ResultadosultimainspeccionTiporesiduos::class, ['tipoResiduo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TipoResiduoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipoResiduoQuery(get_called_class());
    }
}
