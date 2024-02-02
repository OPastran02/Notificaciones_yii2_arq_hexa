<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%direccion_rs}}".
 *
 * @property int $id
 * @property int $Id_RazonSocial
 * @property int $Id_Calle
 * @property int $Altura
 * @property string|null $Piso
 * @property string|null $Dpto
 * @property string|null $Local
 * @property int $Comuna
 * @property float $Lon
 * @property float $Lat
 * @property string $SMP
 * @property int|null $PMatriz
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property int|null $cmr
 *
 * @property Calles $calle
 * @property RazonSocial $razonSocial
 */
class DireccionRazonSocial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%direccion_rs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_RazonSocial', 'Id_Calle', 'Altura', 'Comuna', 'Lon', 'Lat', 'SMP', 'Fecha_Creado', 'Id_Usuario_Creador'], 'required'],
            [['Id_RazonSocial', 'Id_Calle', 'Altura', 'Comuna', 'PMatriz', 'Id_Usuario_Creador', 'cmr'], 'integer'],
            [['Lon', 'Lat'], 'number'],
            [['Fecha_Creado'], 'safe'],
            [['Piso', 'Dpto', 'Local'], 'string', 'max' => 6],
            [['SMP'], 'string', 'max' => 20],
            [['Id_RazonSocial'], 'exist', 'skipOnError' => true, 'targetClass' => RazonSocial::class, 'targetAttribute' => ['Id_RazonSocial' => 'id']],
            [['Id_Calle'], 'exist', 'skipOnError' => true, 'targetClass' => Calles::class, 'targetAttribute' => ['Id_Calle' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Id_RazonSocial' => 'Id Razon Social',
            'Id_Calle' => 'Id Calle',
            'Altura' => 'Altura',
            'Piso' => 'Piso',
            'Dpto' => 'Dpto',
            'Local' => 'Local',
            'Comuna' => 'Comuna',
            'Lon' => 'Lon',
            'Lat' => 'Lat',
            'SMP' => 'Smp',
            'PMatriz' => 'P Matriz',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'cmr' => 'Cmr',
        ];
    }

    /**
     * Gets query for [[Calle]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CallesQuery
     */
    public function getCalle()
    {
        return $this->hasOne(Calles::class, ['id' => 'Id_Calle']);
    }

    /**
     * Gets query for [[RazonSocial]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RazonSocialQuery
     */
    public function getRazonSocial()
    {
        return $this->hasOne(RazonSocial::class, ['id' => 'Id_RazonSocial']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DireccionRazonSocialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DireccionRazonSocialQuery(get_called_class());
    }
}
