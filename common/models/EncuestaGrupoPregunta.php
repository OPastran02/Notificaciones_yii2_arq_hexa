<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_grupo_preguntas}}".
 *
 * @property int $id
 * @property string $nombreGrupo
 *
 * @property EncuestaModeloencuestaGrupopreguntas[] $encuestaModeloencuestaGrupopreguntas
 * @property EncuestaRequisitosPreguntaGrupo[] $encuestaRequisitosPreguntaGrupos
 * @property EncuestaModeloEncuesta[] $modeloencuestas
 * @property EncuestaPregunta[] $preguntas
 */
class EncuestaGrupoPregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_grupo_preguntas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreGrupo'], 'required'],
            [['nombreGrupo'], 'string', 'max' => 255],
            [['nombreGrupo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombreGrupo' => 'Nombre Grupo',
        ];
    }

    /**
     * Gets query for [[EncuestaModeloencuestaGrupopreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloencuestaGrupopreguntasQuery
     */
    public function getEncuestaModeloencuestaGrupopreguntas()
    {
        return $this->hasMany(EncuestaModeloencuestaGrupopreguntas::class, ['grupopreguntas_id' => 'id']);
    }

    /**
     * Gets query for [[EncuestaRequisitosPreguntaGrupos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosPreguntaGrupoQuery
     */
    public function getEncuestaRequisitosPreguntaGrupos()
    {
        return $this->hasMany(EncuestaRequisitosPreguntaGrupo::class, ['grupo_id' => 'id']);
    }

    /**
     * Gets query for [[Modeloencuestas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloEncuestaQuery
     */
    public function getModeloencuestas()
    {
        return $this->hasMany(EncuestaModeloEncuesta::class, ['id' => 'modeloencuesta_id'])->viaTable('{{%encuesta_modeloencuesta_grupopreguntas}}', ['grupopreguntas_id' => 'id']);
    }

    /**
     * Gets query for [[Preguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaPreguntaQuery
     */
    public function getPreguntas()
    {
        return $this->hasMany(EncuestaPregunta::class, ['id' => 'pregunta_id'])->viaTable('{{%encuesta_requisitos_pregunta_grupo}}', ['grupo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaGrupoPreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaGrupoPreguntaQuery(get_called_class());
    }
}
