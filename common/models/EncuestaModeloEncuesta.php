<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_modelo_encuesta}}".
 *
 * @property int $id
 * @property string $nombreEncuesta
 *
 * @property EncuestaModeloencuestaGrupopreguntas[] $encuestaModeloencuestaGrupopreguntas
 * @property EncuestaModeloencuestaPreguntaDeshabilitadas[] $encuestaModeloencuestaPreguntaDeshabilitadas
 * @property EncuestaGrupoPreguntas[] $grupopreguntas
 * @property OrdenInspeccion[] $ordenInspeccions
 * @property EncuestaPregunta[] $preguntas
 */
class EncuestaModeloEncuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_modelo_encuesta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreEncuesta'], 'required'],
            [['nombreEncuesta'], 'string', 'max' => 255],
            [['nombreEncuesta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombreEncuesta' => 'Nombre Encuesta',
        ];
    }

    /**
     * Gets query for [[EncuestaModeloencuestaGrupopreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloencuestaGrupopreguntasQuery
     */
    public function getEncuestaModeloencuestaGrupopreguntas()
    {
        return $this->hasMany(EncuestaModeloencuestaGrupopreguntas::class, ['modeloencuesta_id' => 'id']);
    }

    /**
     * Gets query for [[EncuestaModeloencuestaPreguntaDeshabilitadas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloencuestaPreguntaDeshabilitadasQuery
     */
    public function getEncuestaModeloencuestaPreguntaDeshabilitadas()
    {
        return $this->hasMany(EncuestaModeloencuestaPreguntaDeshabilitadas::class, ['modeloencuesta_id' => 'id']);
    }

    /**
     * Gets query for [[Grupopreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaGrupoPreguntasQuery
     */
    public function getGrupopreguntas()
    {
        return $this->hasMany(EncuestaGrupoPreguntas::class, ['id' => 'grupopreguntas_id'])->viaTable('{{%encuesta_modeloencuesta_grupopreguntas}}', ['modeloencuesta_id' => 'id']);
    }

    /**
     * Gets query for [[OrdenInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccions()
    {
        return $this->hasMany(OrdenInspeccion::class, ['modelo_check_list_id' => 'id']);
    }

    /**
     * Gets query for [[Preguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaPreguntaQuery
     */
    public function getPreguntas()
    {
        return $this->hasMany(EncuestaPregunta::class, ['id' => 'pregunta_id'])->viaTable('{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}', ['modeloencuesta_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaModeloEncuestaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaModeloEncuestaQuery(get_called_class());
    }
}
