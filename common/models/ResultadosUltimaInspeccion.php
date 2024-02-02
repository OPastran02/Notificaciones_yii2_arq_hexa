<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%resultados_ultima_inspeccion}}".
 *
 * @property int $id
 * @property int|null $estado326_id
 * @property int|null $tramite_efluentes_id
 * @property int|null $destino_vuelco_efluentes_id
 * @property string|null $proximaInspeccion
 * @property int|null $inspeccionarCara
 * @property float|null $superficieCubierta
 * @property float|null $superficieTotal
 * @property string|null $inscripto326
 * @property int|null $cantTanques
 * @property int|null $tanquesActivos
 * @property int|null $tanquesCegadosInertizados
 * @property int|null $tanquesErradicados
 * @property int|null $curl
 * @property string|null $generaEfluentesLiquidosInd
 * @property float|null $caudalVuelcoMax
 * @property string|null $horaVuelvoInicial
 * @property string|null $horaVuelcoFinal
 * @property string|null $tramiteEfluentesEstado
 * @property string|null $reCirculacionAgua
 * @property string|null $CTMMC
 * @property string|null $realizaTratamientoEfluentesPrevioVuelco
 * @property string|null $generaBarros
 * @property string|null $protocoloVuelcaLimitesPermitidos
 * @property string|null $muestreoLaboratorio
 * @property string|null $resultadosLaboratorioLimitesPermisibles
 * @property string|null $videoInspeccionoUIT
 * @property int|null $establecimiento_id
 *
 * @property DestinoVuelco $destinoVuelcoEfluentes
 * @property Establecimiento $establecimiento
 * @property EstadoRes326 $estado326
 * @property ResultadosultimainspeccionTiporesiduos[] $resultadosultimainspeccionTiporesiduos
 * @property ResultadosultimainspeccionTipotratamiento[] $resultadosultimainspeccionTipotratamientos
 * @property TipoResiduos[] $tipoResiduos
 * @property TipoTratamiento[] $tipoTratamientos
 * @property TramiteEfluentes $tramiteEfluentes
 */
class ResultadosUltimaInspeccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%resultados_ultima_inspeccion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado326_id', 'tramite_efluentes_id', 'destino_vuelco_efluentes_id', 'inspeccionarCara', 'cantTanques', 'tanquesActivos', 'tanquesCegadosInertizados', 'tanquesErradicados', 'curl', 'establecimiento_id'], 'integer'],
            [['proximaInspeccion', 'horaVuelvoInicial', 'horaVuelcoFinal'], 'safe'],
            [['superficieCubierta', 'superficieTotal', 'caudalVuelcoMax'], 'number'],
            [['inscripto326', 'generaEfluentesLiquidosInd', 'tramiteEfluentesEstado', 'reCirculacionAgua', 'CTMMC', 'realizaTratamientoEfluentesPrevioVuelco', 'generaBarros', 'protocoloVuelcaLimitesPermitidos', 'muestreoLaboratorio', 'resultadosLaboratorioLimitesPermisibles', 'videoInspeccionoUIT'], 'string', 'max' => 2],
            [['curl'], 'unique'],
            [['establecimiento_id'], 'unique'],
            [['estado326_id'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoRes326::class, 'targetAttribute' => ['estado326_id' => 'id']],
            [['establecimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['establecimiento_id' => 'id']],
            [['destino_vuelco_efluentes_id'], 'exist', 'skipOnError' => true, 'targetClass' => DestinoVuelco::class, 'targetAttribute' => ['destino_vuelco_efluentes_id' => 'id']],
            [['tramite_efluentes_id'], 'exist', 'skipOnError' => true, 'targetClass' => TramiteEfluentes::class, 'targetAttribute' => ['tramite_efluentes_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado326_id' => 'Estado326 ID',
            'tramite_efluentes_id' => 'Tramite Efluentes ID',
            'destino_vuelco_efluentes_id' => 'Destino Vuelco Efluentes ID',
            'proximaInspeccion' => 'Proxima Inspeccion',
            'inspeccionarCara' => 'Inspeccionar Cara',
            'superficieCubierta' => 'Superficie Cubierta',
            'superficieTotal' => 'Superficie Total',
            'inscripto326' => 'Inscripto326',
            'cantTanques' => 'Cant Tanques',
            'tanquesActivos' => 'Tanques Activos',
            'tanquesCegadosInertizados' => 'Tanques Cegados Inertizados',
            'tanquesErradicados' => 'Tanques Erradicados',
            'curl' => 'Curl',
            'generaEfluentesLiquidosInd' => 'Genera Efluentes Liquidos Ind',
            'caudalVuelcoMax' => 'Caudal Vuelco Max',
            'horaVuelvoInicial' => 'Hora Vuelvo Inicial',
            'horaVuelcoFinal' => 'Hora Vuelco Final',
            'tramiteEfluentesEstado' => 'Tramite Efluentes Estado',
            'reCirculacionAgua' => 'Re Circulacion Agua',
            'CTMMC' => 'Ctmmc',
            'realizaTratamientoEfluentesPrevioVuelco' => 'Realiza Tratamiento Efluentes Previo Vuelco',
            'generaBarros' => 'Genera Barros',
            'protocoloVuelcaLimitesPermitidos' => 'Protocolo Vuelca Limites Permitidos',
            'muestreoLaboratorio' => 'Muestreo Laboratorio',
            'resultadosLaboratorioLimitesPermisibles' => 'Resultados Laboratorio Limites Permisibles',
            'videoInspeccionoUIT' => 'Video Inspecciono Uit',
            'establecimiento_id' => 'Establecimiento ID',
        ];
    }

    /**
     * Gets query for [[DestinoVuelcoEfluentes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DestinoVuelcoQuery
     */
    public function getDestinoVuelcoEfluentes()
    {
        return $this->hasOne(DestinoVuelco::class, ['id' => 'destino_vuelco_efluentes_id']);
    }

    /**
     * Gets query for [[Establecimiento]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstablecimientoQuery
     */
    public function getEstablecimiento()
    {
        return $this->hasOne(Establecimiento::class, ['id' => 'establecimiento_id']);
    }

    /**
     * Gets query for [[Estado326]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstadoRes326Query
     */
    public function getEstado326()
    {
        return $this->hasOne(EstadoRes326::class, ['id' => 'estado326_id']);
    }

    /**
     * Gets query for [[ResultadosultimainspeccionTiporesiduos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosultimainspeccionTiporesiduosQuery
     */
    public function getResultadosultimainspeccionTiporesiduos()
    {
        return $this->hasMany(ResultadosultimainspeccionTiporesiduos::class, ['resultadosUltimaInspeccion_id' => 'id']);
    }

    /**
     * Gets query for [[ResultadosultimainspeccionTipotratamientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ResultadosultimainspeccionTipotratamientoQuery
     */
    public function getResultadosultimainspeccionTipotratamientos()
    {
        return $this->hasMany(ResultadosultimainspeccionTipotratamiento::class, ['resultadosUltimaInspeccion_id' => 'id']);
    }

    /**
     * Gets query for [[TipoResiduos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoResiduosQuery
     */
    public function getTipoResiduos()
    {
        return $this->hasMany(TipoResiduos::class, ['id' => 'tipoResiduo_id'])->viaTable('{{%resultadosultimainspeccion_tiporesiduos}}', ['resultadosUltimaInspeccion_id' => 'id']);
    }

    /**
     * Gets query for [[TipoTratamientos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoTratamientoQuery
     */
    public function getTipoTratamientos()
    {
        return $this->hasMany(TipoTratamiento::class, ['id' => 'tipoTratamiento_id'])->viaTable('{{%resultadosultimainspeccion_tipotratamiento}}', ['resultadosUltimaInspeccion_id' => 'id']);
    }

    /**
     * Gets query for [[TramiteEfluentes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TramiteEfluentesQuery
     */
    public function getTramiteEfluentes()
    {
        return $this->hasOne(TramiteEfluentes::class, ['id' => 'tramite_efluentes_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ResultadosUltimaInspeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ResultadosUltimaInspeccionQuery(get_called_class());
    }
}
