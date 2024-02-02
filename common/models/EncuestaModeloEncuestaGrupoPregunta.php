<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_modeloencuesta_grupopreguntas}}".
 *
 * @property int $modeloencuesta_id
 * @property int $grupopreguntas_id
 *
 * @property EncuestaGrupoPreguntas $grupopreguntas
 * @property EncuestaModeloEncuesta $modeloencuesta
 */
class EncuestaModeloEncuestaGrupoPregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_modeloencuesta_grupopreguntas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modeloencuesta_id', 'grupopreguntas_id'], 'required'],
            [['modeloencuesta_id', 'grupopreguntas_id'], 'integer'],
            [['modeloencuesta_id', 'grupopreguntas_id'], 'unique', 'targetAttribute' => ['modeloencuesta_id', 'grupopreguntas_id']],
            [['modeloencuesta_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaModeloEncuesta::class, 'targetAttribute' => ['modeloencuesta_id' => 'id']],
            [['grupopreguntas_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaGrupoPreguntas::class, 'targetAttribute' => ['grupopreguntas_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'modeloencuesta_id' => 'Modeloencuesta ID',
            'grupopreguntas_id' => 'Grupopreguntas ID',
        ];
    }

    /**
     * Gets query for [[Grupopreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaGrupoPreguntasQuery
     */
    public function getGrupopreguntas()
    {
        return $this->hasOne(EncuestaGrupoPreguntas::class, ['id' => 'grupopreguntas_id']);
    }

    /**
     * Gets query for [[Modeloencuesta]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloEncuestaQuery
     */
    public function getModeloencuesta()
    {
        return $this->hasOne(EncuestaModeloEncuesta::class, ['id' => 'modeloencuesta_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaModeloEncuestaGrupoPreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaModeloEncuestaGrupoPreguntaQuery(get_called_class());
    }
}
