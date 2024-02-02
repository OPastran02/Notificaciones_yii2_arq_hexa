<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%establecimiento}}".
 *
 * @property int $id
 * @property int|null $Id_Estado
 * @property string $Fecha_Estado
 * @property int $Id_Rubro_Principal
 * @property string|null $Rubro_Extendido
 * @property string|null $Email
 * @property string|null $Telefono
 * @property string|null $Bandera
 * @property int $ExEESS
 * @property string|null $observaciones
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 * @property int|null $favorito
 *
 * @property Actuacion[] $actuacions
 * @property Direccion[] $direccions
 * @property EstablecimientosRazonessociales[] $establecimientosRazonessociales
 * @property EstablecimientosRubros[] $establecimientosRubros
 * @property Estado $estado
 * @property Notificacion[] $notificacions
 * @property OrdenInspeccion[] $ordenInspeccions
 * @property RazonSocial[] $razonSocials
 * @property ResultadosUltimaInspeccion $resultadosUltimaInspeccion
 * @property RubroPrincipal $rubroPrincipal
 * @property Rubro[] $rubros
 */
class Establecimiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%establecimiento}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Estado', 'Id_Rubro_Principal', 'ExEESS', 'Id_Usuario_Creador', 'Id_Usuario_Modificador', 'favorito'], 'integer'],
            [['Fecha_Estado', 'Id_Rubro_Principal', 'ExEESS', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['Fecha_Estado', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['observaciones'], 'string'],
            [['Rubro_Extendido'], 'string', 'max' => 150],
            [['Email', 'Bandera'], 'string', 'max' => 50],
            [['Telefono'], 'string', 'max' => 30],
            [['Id_Rubro_Principal'], 'exist', 'skipOnError' => true, 'targetClass' => RubroPrincipal::class, 'targetAttribute' => ['Id_Rubro_Principal' => 'id']],
            [['Id_Estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::class, 'targetAttribute' => ['Id_Estado' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Id_Estado' => 'Id Estado',
            'Fecha_Estado' => 'Fecha Estado',
            'Id_Rubro_Principal' => 'Id Rubro Principal',
            'Rubro_Extendido' => 'Rubro Extendido',
            'Email' => 'Email',
            'Telefono' => 'Telefono',
            'Bandera' => 'Bandera',
            'ExEESS' => 'Ex Eess',
            'observaciones' => 'Observaciones',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
            'favorito' => 'Favorito',
        ];
    }

    /**
     * Gets query for [[Actuacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActuacionQuery
     */
    public function getActuacions()
    {
        return $this->hasMany(Actuacion::class, ['Id_Establecimiento' => 'id']);
    }

    /**
     * Gets query for [[Direccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DireccionQuery
     */
    public function getDireccions()
    {
        return $this->hasMany(Direccion::class, ['Id_Establecimiento' => 'id']);
    }

    /**
     * Gets query for [[EstablecimientosRazonessociales]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientosRazonessocialesQuery
     */
    public function getEstablecimientosRazonessociales()
    {
        return $this->hasMany(EstablecimientosRazonessociales::class, ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[EstablecimientosRubros]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientosRubrosQuery
     */
    public function getEstablecimientosRubros()
    {
        return $this->hasMany(EstablecimientosRubros::class, ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[Estado]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstadoQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::class, ['id' => 'Id_Estado']);
    }

    /**
     * Gets query for [[Notificacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NotificacionQuery
     */
    public function getNotificacions()
    {
        return $this->hasMany(Notificacion::class, ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[OrdenInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrdenInspeccionQuery
     */
    public function getOrdenInspeccions()
    {
        return $this->hasMany(OrdenInspeccion::class, ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[RazonSocials]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RazonSocialQuery
     */
    public function getRazonSocials()
    {
        return $this->hasMany(RazonSocial::class, ['id' => 'razon_social_id'])->viaTable('{{%establecimientos_razonessociales}}', ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[ResultadosUltimaInspeccion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosUltimaInspeccionQuery
     */
    public function getResultadosUltimaInspeccion()
    {
        return $this->hasOne(ResultadosUltimaInspeccion::class, ['establecimiento_id' => 'id']);
    }

    /**
     * Gets query for [[RubroPrincipal]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RubroPrincipalQuery
     */
    public function getRubroPrincipal()
    {
        return $this->hasOne(RubroPrincipal::class, ['id' => 'Id_Rubro_Principal']);
    }

    /**
     * Gets query for [[Rubros]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\RubroQuery
     */
    public function getRubros()
    {
        return $this->hasMany(Rubro::class, ['id' => 'rubro_id'])->viaTable('{{%establecimientos_rubros}}', ['establecimiento_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EstablecimientoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EstablecimientoQuery(get_called_class());
    }
}
