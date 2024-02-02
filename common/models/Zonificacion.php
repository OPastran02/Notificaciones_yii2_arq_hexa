<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%zonificacion}}".
 *
 * @property int $id
 * @property string $zonificacion
 * @property string|null $ASATIPO
 * @property string|null $ASAETIPO
 * @property int|null $DIURNO_HABITABLE
 * @property int|null $DIURNO_SERVICIO
 * @property int|null $NOCTURNO_HABITABLE
 * @property int|null $NOCTURNO_SERVICIO
 * @property int|null $DIURNO_EXTERIOR
 * @property int|null $NOCTURNO_EXTERIOR
 */
class Zonificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%zonificacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['zonificacion'], 'required'],
            [['DIURNO_HABITABLE', 'DIURNO_SERVICIO', 'NOCTURNO_HABITABLE', 'NOCTURNO_SERVICIO', 'DIURNO_EXTERIOR', 'NOCTURNO_EXTERIOR'], 'integer'],
            [['zonificacion'], 'string', 'max' => 45],
            [['ASATIPO', 'ASAETIPO'], 'string', 'max' => 10],
            [['zonificacion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zonificacion' => 'Zonificacion',
            'ASATIPO' => 'Asatipo',
            'ASAETIPO' => 'Asaetipo',
            'DIURNO_HABITABLE' => 'Diurno Habitable',
            'DIURNO_SERVICIO' => 'Diurno Servicio',
            'NOCTURNO_HABITABLE' => 'Nocturno Habitable',
            'NOCTURNO_SERVICIO' => 'Nocturno Servicio',
            'DIURNO_EXTERIOR' => 'Diurno Exterior',
            'NOCTURNO_EXTERIOR' => 'Nocturno Exterior',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ZonificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ZonificacionQuery(get_called_class());
    }
}
