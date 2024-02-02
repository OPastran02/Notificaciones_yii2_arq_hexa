<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}".
 *
 * @property int $modeloencuesta_id
 * @property int $pregunta_id
 *
 * @property EncuestaModeloEncuesta $modeloencuesta
 * @property EncuestaPregunta $pregunta
 */
class EncuestaModeloEncuestaPreguntaDeshabilitada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_modeloencuesta_pregunta_deshabilitadas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modeloencuesta_id', 'pregunta_id'], 'required'],
            [['modeloencuesta_id', 'pregunta_id'], 'integer'],
            [['modeloencuesta_id', 'pregunta_id'], 'unique', 'targetAttribute' => ['modeloencuesta_id', 'pregunta_id']],
            [['pregunta_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaPregunta::class, 'targetAttribute' => ['pregunta_id' => 'id']],
            [['modeloencuesta_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaModeloEncuesta::class, 'targetAttribute' => ['modeloencuesta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'modeloencuesta_id' => 'Modeloencuesta ID',
            'pregunta_id' => 'Pregunta ID',
        ];
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
     * @return \common\models\query\EncuestaModeloEncuestaPreguntaDeshabilitadaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaModeloEncuestaPreguntaDeshabilitadaQuery(get_called_class());
    }
}
