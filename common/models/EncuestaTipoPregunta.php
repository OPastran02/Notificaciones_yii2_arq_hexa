<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_tipo_pregunta}}".
 *
 * @property int $id
 * @property string $tipoPregunta
 *
 * @property EncuestaPregunta[] $encuestaPreguntas
 */
class EncuestaTipoPregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_tipo_pregunta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipoPregunta'], 'required'],
            [['tipoPregunta'], 'string', 'max' => 255],
            [['tipoPregunta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipoPregunta' => 'Tipo Pregunta',
        ];
    }

    /**
     * Gets query for [[EncuestaPreguntas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaPreguntaQuery
     */
    public function getEncuestaPreguntas()
    {
        return $this->hasMany(EncuestaPregunta::class, ['tipo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaTipoPreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaTipoPreguntaQuery(get_called_class());
    }
}
