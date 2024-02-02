<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%Ruidos}}".
 *
 * @property int $idRuidos
 * @property int|null $ASAE
 * @property int|null $Ambiente
 * @property int|null $Periodo
 * @property int|null $ASA
 * @property int|null $Recinto
 * @property int|null $Uso_predominante
 * @property int|null $LMP
 * @property int|null $Correccion
 */
class Ruido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Ruidos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ASAE', 'Ambiente', 'Periodo', 'ASA', 'Recinto', 'Uso_predominante', 'LMP', 'Correccion'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idRuidos' => 'Id Ruidos',
            'ASAE' => 'Asae',
            'Ambiente' => 'Ambiente',
            'Periodo' => 'Periodo',
            'ASA' => 'Asa',
            'Recinto' => 'Recinto',
            'Uso_predominante' => 'Uso Predominante',
            'LMP' => 'Lmp',
            'Correccion' => 'Correccion',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RuidoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RuidoQuery(get_called_class());
    }
}
