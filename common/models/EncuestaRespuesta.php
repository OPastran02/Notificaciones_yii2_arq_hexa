<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_respuestas}}".
 *
 * @property int $id
 * @property string $Respuesta
 * @property int $originalId
 *
 * @property EncuestaRequisitosRespuestas[] $encuestaRequisitosRespuestas
 */
class EncuestaRespuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_respuestas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Respuesta', 'originalId'], 'required'],
            [['originalId'], 'integer'],
            [['Respuesta'], 'string', 'max' => 255],
            [['Respuesta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Respuesta' => 'Respuesta',
            'originalId' => 'Original ID',
        ];
    }

    /**
     * Gets query for [[EncuestaRequisitosRespuestas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosRespuestasQuery
     */
    public function getEncuestaRequisitosRespuestas()
    {
        return $this->hasMany(EncuestaRequisitosRespuestas::class, ['respuesta_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaRespuestaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaRespuestaQuery(get_called_class());
    }
}
