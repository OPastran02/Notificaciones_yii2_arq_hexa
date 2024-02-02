<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%equipoRuidos}}".
 *
 * @property int $id
 * @property string|null $Tipo
 * @property string|null $Marca
 * @property string|null $Modelo
 * @property string|null $Serie
 * @property string|null $Clase
 * @property string|null $Denominacion
 */
class EquipoRuidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%equipoRuidos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tipo'], 'string', 'max' => 1],
            [['Marca', 'Modelo', 'Serie', 'Clase', 'Denominacion'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Tipo' => 'Tipo',
            'Marca' => 'Marca',
            'Modelo' => 'Modelo',
            'Serie' => 'Serie',
            'Clase' => 'Clase',
            'Denominacion' => 'Denominacion',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EquipoRuidosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EquipoRuidosQuery(get_called_class());
    }
}
