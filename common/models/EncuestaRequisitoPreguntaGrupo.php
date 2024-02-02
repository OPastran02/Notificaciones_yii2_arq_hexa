<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_requisitos_pregunta_grupo}}".
 *
 * @property int $id
 * @property int|null $grupo_id
 * @property int|null $pregunta_id
 * @property int $MostrarInicio
 * @property int $Obligatorio
 * @property int $RequiereFoto
 * @property string $validacion
 * @property int $orden
 *
 * @property EncuestaFalta[] $encuestaFaltas
 * @property EncuestaSiguientePregunta[] $encuestaSiguientePreguntas
 * @property EncuestaSiguientePregunta[] $encuestaSiguientePreguntas0
 * @property EncuestaGrupoPreguntas $grupo
 * @property EncuestaPregunta $pregunta
 */
class EncuestaRequisitoPreguntaGrupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_requisitos_pregunta_grupo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grupo_id', 'pregunta_id', 'MostrarInicio', 'Obligatorio', 'RequiereFoto', 'orden'], 'integer'],
            [['MostrarInicio', 'Obligatorio', 'RequiereFoto', 'validacion', 'orden'], 'required'],
            [['validacion'], 'string', 'max' => 255],
            [['grupo_id', 'pregunta_id'], 'unique', 'targetAttribute' => ['grupo_id', 'pregunta_id']],
            [['pregunta_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaPregunta::class, 'targetAttribute' => ['pregunta_id' => 'id']],
            [['grupo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaGrupoPreguntas::class, 'targetAttribute' => ['grupo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grupo_id' => 'Grupo ID',
            'pregunta_id' => 'Pregunta ID',
            'MostrarInicio' => 'Mostrar Inicio',
            'Obligatorio' => 'Obligatorio',
            'RequiereFoto' => 'Requiere Foto',
            'validacion' => 'Validacion',
            'orden' => 'Orden',
        ];
    }

    /**
     * Gets query for [[EncuestaFaltas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaFaltaQuery
     */
    public function getEncuestaFaltas()
    {
        return $this->hasMany(EncuestaFalta::class, ['grupo_id' => 'id']);
    }

    /**
     * Gets query for [[EncuestaSiguientePreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getEncuestaSiguientePreguntas()
    {
        return $this->hasMany(EncuestaSiguientePregunta::class, ['requisitosiguiente_id' => 'id']);
    }

    /**
     * Gets query for [[EncuestaSiguientePreguntas0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getEncuestaSiguientePreguntas0()
    {
        return $this->hasMany(EncuestaSiguientePregunta::class, ['requisitoorigen_id' => 'id']);
    }

    /**
     * Gets query for [[Grupo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaGrupoPreguntasQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(EncuestaGrupoPreguntas::class, ['id' => 'grupo_id']);
    }

    /**
     * Gets query for [[Pregunta]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaPreguntaQuery
     */
    public function getPregunta()
    {
        return $this->hasOne(EncuestaPregunta::class, ['id' => 'pregunta_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaRequisitoPreguntaGrupoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaRequisitoPreguntaGrupoQuery(get_called_class());
    }
}
