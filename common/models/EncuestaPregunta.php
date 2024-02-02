<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_pregunta}}".
 *
 * @property int $id
 * @property int|null $tipo_id
 * @property string $pregunta
 *
 * @property EncuestaModeloencuestaPreguntaDeshabilitadas[] $encuestaModeloencuestaPreguntaDeshabilitadas
 * @property EncuestaRequisitosPreguntaGrupo[] $encuestaRequisitosPreguntaGrupos
 * @property EncuestaGrupoPreguntas[] $grupos
 * @property EncuestaModeloEncuesta[] $modeloencuestas
 * @property EncuestaTipoPregunta $tipo
 */
class EncuestaPregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_pregunta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_id'], 'integer'],
            [['pregunta'], 'required'],
            [['pregunta'], 'string', 'max' => 255],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaTipoPregunta::class, 'targetAttribute' => ['tipo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_id' => 'Tipo ID',
            'pregunta' => 'Pregunta',
        ];
    }

    /**
     * Gets query for [[EncuestaModeloencuestaPreguntaDeshabilitadas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloencuestaPreguntaDeshabilitadasQuery
     */
    public function getEncuestaModeloencuestaPreguntaDeshabilitadas()
    {
        return $this->hasMany(EncuestaModeloencuestaPreguntaDeshabilitadas::class, ['pregunta_id' => 'id']);
    }

    /**
     * Gets query for [[EncuestaRequisitosPreguntaGrupos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosPreguntaGrupoQuery
     */
    public function getEncuestaRequisitosPreguntaGrupos()
    {
        return $this->hasMany(EncuestaRequisitosPreguntaGrupo::class, ['pregunta_id' => 'id']);
    }

    /**
     * Gets query for [[Grupos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaGrupoPreguntasQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(EncuestaGrupoPreguntas::class, ['id' => 'grupo_id'])->viaTable('{{%encuesta_requisitos_pregunta_grupo}}', ['pregunta_id' => 'id']);
    }

    /**
     * Gets query for [[Modeloencuestas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloEncuestaQuery
     */
    public function getModeloencuestas()
    {
        return $this->hasMany(EncuestaModeloEncuesta::class, ['id' => 'modeloencuesta_id'])->viaTable('{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}', ['pregunta_id' => 'id']);
    }

    /**
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaTipoPreguntaQuery
     */
    public function getTipo()
    {
        return $this->hasOne(EncuestaTipoPregunta::class, ['id' => 'tipo_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaPreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaPreguntaQuery(get_called_class());
    }
}
