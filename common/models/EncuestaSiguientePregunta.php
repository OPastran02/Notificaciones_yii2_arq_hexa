<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_siguiente_pregunta}}".
 *
 * @property int $id
 * @property int|null $requisitoorigen_id
 * @property int|null $requisitosiguiente_id
 * @property string|null $validacion
 *
 * @property EncuestaAgrupacionSiguientePregunta[] $encuestaAgrupacionSiguientePreguntas
 * @property EncuestaAgrupacionSiguientePregunta[] $encuestaAgrupacionSiguientePreguntas0
 * @property EncuestaRequisitosPreguntaGrupo $requisitoorigen
 * @property EncuestaRequisitosPreguntaGrupo $requisitosiguiente
 * @property EncuestaSiguientePregunta[] $siguientepreguntaId2s
 * @property EncuestaSiguientePregunta[] $siguientpreguntaId1s
 */
class EncuestaSiguientePregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_siguiente_pregunta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requisitoorigen_id', 'requisitosiguiente_id'], 'integer'],
            [['validacion'], 'string', 'max' => 255],
            [['requisitosiguiente_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaRequisitosPreguntaGrupo::class, 'targetAttribute' => ['requisitosiguiente_id' => 'id']],
            [['requisitoorigen_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaRequisitosPreguntaGrupo::class, 'targetAttribute' => ['requisitoorigen_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'requisitoorigen_id' => 'Requisitoorigen ID',
            'requisitosiguiente_id' => 'Requisitosiguiente ID',
            'validacion' => 'Validacion',
        ];
    }

    /**
     * Gets query for [[EncuestaAgrupacionSiguientePreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaAgrupacionSiguientePreguntaQuery
     */
    public function getEncuestaAgrupacionSiguientePreguntas()
    {
        return $this->hasMany(EncuestaAgrupacionSiguientePregunta::class, ['siguientepregunta_id2' => 'id']);
    }

    /**
     * Gets query for [[EncuestaAgrupacionSiguientePreguntas0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaAgrupacionSiguientePreguntaQuery
     */
    public function getEncuestaAgrupacionSiguientePreguntas0()
    {
        return $this->hasMany(EncuestaAgrupacionSiguientePregunta::class, ['siguientpregunta_id1' => 'id']);
    }

    /**
     * Gets query for [[Requisitoorigen]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosPreguntaGrupoQuery
     */
    public function getRequisitoorigen()
    {
        return $this->hasOne(EncuestaRequisitosPreguntaGrupo::class, ['id' => 'requisitoorigen_id']);
    }

    /**
     * Gets query for [[Requisitosiguiente]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosPreguntaGrupoQuery
     */
    public function getRequisitosiguiente()
    {
        return $this->hasOne(EncuestaRequisitosPreguntaGrupo::class, ['id' => 'requisitosiguiente_id']);
    }

    /**
     * Gets query for [[SiguientepreguntaId2s]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getSiguientepreguntaId2s()
    {
        return $this->hasMany(EncuestaSiguientePregunta::class, ['id' => 'siguientepregunta_id2'])->viaTable('{{%encuesta_agrupacion_siguiente_pregunta}}', ['siguientpregunta_id1' => 'id']);
    }

    /**
     * Gets query for [[SiguientpreguntaId1s]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getSiguientpreguntaId1s()
    {
        return $this->hasMany(EncuestaSiguientePregunta::class, ['id' => 'siguientpregunta_id1'])->viaTable('{{%encuesta_agrupacion_siguiente_pregunta}}', ['siguientepregunta_id2' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaSiguientePreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaSiguientePreguntaQuery(get_called_class());
    }
}
