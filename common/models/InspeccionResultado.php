<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%inspecciones_resultados}}".
 *
 * @property int $id
 * @property int|null $orden_inspeccion_id
 * @property int|null $pregunta_id
 * @property int|null $grupo_id
 * @property string|null $RespuestaLibre
 * @property int|null $orden
 *
 * @property InspeccionesResultadosFotos[] $inspeccionesResultadosFotos
 */
class InspeccionResultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%inspecciones_resultados}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orden_inspeccion_id', 'pregunta_id', 'grupo_id', 'orden'], 'integer'],
            [['RespuestaLibre'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orden_inspeccion_id' => 'Orden Inspeccion ID',
            'pregunta_id' => 'Pregunta ID',
            'grupo_id' => 'Grupo ID',
            'RespuestaLibre' => 'Respuesta Libre',
            'orden' => 'Orden',
        ];
    }

    /**
     * Gets query for [[InspeccionesResultadosFotos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\InspeccionesResultadosFotosQuery
     */
    public function getInspeccionesResultadosFotos()
    {
        return $this->hasMany(InspeccionesResultadosFotos::class, ['resultado_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InspeccionResultadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InspeccionResultadoQuery(get_called_class());
    }
}
