<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_requisitos_respuestas}}".
 *
 * @property int $requisito_id
 * @property int $respuesta_id
 *
 * @property EncuestaRespuestas $respuesta
 */
class EncuestaRequisitosRespuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_requisitos_respuestas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requisito_id', 'respuesta_id'], 'required'],
            [['requisito_id', 'respuesta_id'], 'integer'],
            [['requisito_id', 'respuesta_id'], 'unique', 'targetAttribute' => ['requisito_id', 'respuesta_id']],
            [['respuesta_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaRespuestas::class, 'targetAttribute' => ['respuesta_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'requisito_id' => 'Requisito ID',
            'respuesta_id' => 'Respuesta ID',
        ];
    }

    /**
     * Gets query for [[Respuesta]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRespuestasQuery
     */
    public function getRespuesta()
    {
        return $this->hasOne(EncuestaRespuestas::class, ['id' => 'respuesta_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaRequisitosRespuestaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaRequisitosRespuestaQuery(get_called_class());
    }
}
