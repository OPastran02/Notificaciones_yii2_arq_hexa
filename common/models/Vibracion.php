<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Vibraciones}}".
 *
 * @property int $idVibraciones
 * @property int|null $Tipo
 * @property int|null $horario
 * @property float|null $LMP_Eje_X
 * @property float|null $LMP_Eje_Y
 * @property float|null $LMP_Eje_Z
 * @property int|null $Area
 */
class Vibracion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Vibraciones}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idVibraciones'], 'required'],
            [['idVibraciones', 'Tipo', 'horario', 'Area'], 'integer'],
            [['LMP_Eje_X', 'LMP_Eje_Y', 'LMP_Eje_Z'], 'number'],
            [['idVibraciones'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idVibraciones' => 'Id Vibraciones',
            'Tipo' => 'Tipo',
            'horario' => 'Horario',
            'LMP_Eje_X' => 'Lmp Eje X',
            'LMP_Eje_Y' => 'Lmp Eje Y',
            'LMP_Eje_Z' => 'Lmp Eje Z',
            'Area' => 'Area',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\VibracionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VibracionQuery(get_called_class());
    }
}
