<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%razon_social}}".
 *
 * @property int $id
 * @property int $cuit
 * @property string $tipo
 * @property string|null $telefono
 * @property string|null $mail
 * @property string $nombre1
 * @property string|null $nombre2
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property DireccionRs[] $direccionRs
 * @property Establecimiento[] $establecimientos
 * @property EstablecimientosRazonessociales[] $establecimientosRazonessociales
 */
class RazonSocial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%razon_social}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuit', 'tipo', 'nombre1', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['cuit', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['tipo'], 'string', 'max' => 1],
            [['telefono'], 'string', 'max' => 50],
            [['mail', 'nombre1', 'nombre2'], 'string', 'max' => 100],
            [['cuit'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cuit' => 'Cuit',
            'tipo' => 'Tipo',
            'telefono' => 'Telefono',
            'mail' => 'Mail',
            'nombre1' => 'Nombre1',
            'nombre2' => 'Nombre2',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[DireccionRs]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DireccionRsQuery
     */
    public function getDireccionRs()
    {
        return $this->hasMany(DireccionRs::class, ['Id_RazonSocial' => 'id']);
    }

    /**
     * Gets query for [[Establecimientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimientos()
    {
        return $this->hasMany(Establecimiento::class, ['id' => 'establecimiento_id'])->viaTable('{{%establecimientos_razonessociales}}', ['razon_social_id' => 'id']);
    }

    /**
     * Gets query for [[EstablecimientosRazonessociales]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientosRazonessocialesQuery
     */
    public function getEstablecimientosRazonessociales()
    {
        return $this->hasMany(EstablecimientosRazonessociales::class, ['razon_social_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\RazonSocialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RazonSocialQuery(get_called_class());
    }
}
