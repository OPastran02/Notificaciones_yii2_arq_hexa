<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%faltas}}".
 *
 * @property int $idfaltas
 * @property int|null $orden_inspeccion
 * @property string|null $pregunta
 * @property string|null $falta
 * @property string|null $tipo_pregunta
 */
class Falta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faltas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orden_inspeccion'], 'integer'],
            [['pregunta', 'falta', 'tipo_pregunta'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idfaltas' => 'Idfaltas',
            'orden_inspeccion' => 'Orden Inspeccion',
            'pregunta' => 'Pregunta',
            'falta' => 'Falta',
            'tipo_pregunta' => 'Tipo Pregunta',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FaltaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FaltaQuery(get_called_class());
    }
}
