<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%inspecciones_respuestas}}".
 *
 * @property int $resultado_id
 * @property int $respuesta_id
 */
class InspeccionRespuesta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%inspecciones_respuestas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resultado_id', 'respuesta_id'], 'required'],
            [['resultado_id', 'respuesta_id'], 'integer'],
            [['resultado_id', 'respuesta_id'], 'unique', 'targetAttribute' => ['resultado_id', 'respuesta_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resultado_id' => 'Resultado ID',
            'respuesta_id' => 'Respuesta ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InspeccionRespuestaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InspeccionRespuestaQuery(get_called_class());
    }
}
