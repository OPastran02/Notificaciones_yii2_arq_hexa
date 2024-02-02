<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%rubro_principal}}".
 *
 * @property int $id
 * @property string $RubroPrincipal
 * @property int $Frecuencia
 * @property int $Habilitado
 *
 * @property Establecimiento[] $establecimientos
 */
class RubroPtincipal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%rubro_principal}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RubroPrincipal', 'Frecuencia', 'Habilitado'], 'required'],
            [['Frecuencia', 'Habilitado'], 'integer'],
            [['RubroPrincipal'], 'string', 'max' => 50],
            [['RubroPrincipal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'RubroPrincipal' => 'Rubro Principal',
            'Frecuencia' => 'Frecuencia',
            'Habilitado' => 'Habilitado',
        ];
    }

    /**
     * Gets query for [[Establecimientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimientos()
    {
        return $this->hasMany(Establecimiento::class, ['Id_Rubro_Principal' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RubroPtincipalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RubroPtincipalQuery(get_called_class());
    }
}
