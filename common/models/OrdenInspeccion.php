<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orden_inspeccion}}".
 *
 * @property int $id
 * @property int|null $modelo_check_list_id
 * @property int|null $area_id
 * @property int|null $circuito_id
 * @property int|null $establecimiento_id
 * @property int|null $checklist
 * @property int|null $id_sap
 * @property string|null $observaciones
 * @property int $anulada
 * @property int $realizada
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 * @property int|null $eliminada
 * @property int|null $Id_Usuario_Eliminador
 * @property int|null $generaPeligrosos
 * @property int|null $generaPatogenicos
 * @property int|null $generaAvus
 * @property int|null $generaEfluentesLiquidos
 * @property int|null $generaEmisionesGaseosas
 * @property int|null $inscriptoRac
 * @property int|null $tieneTanquesCombustible
 * @property int|null $inscriptoRegLavanderiaTintoreria
 * @property int|null $sinActividadImpactoAmbiental
 * @property int|null $ruido
 * @property string|null $suaci
 * @property int|null $olores
 * @property int|null $ctrlCedula
 * @property int|null $motivo_inspeccion_id
 * @property string|null $observacionesMotivoInspeccion
 * @property int|null $autorizacion
 * @property int|null $Id_Usuario_Autorizador
 * @property int|null $completa
 * @property string|null $Fecha_Inspeccion_Completa
 * @property int|null $revisionTablet
 * @property int|null $cerradaAutomaticamente
 * @property string|null $Fecha_Cerrada_Automaticamente
 * @property int|null $reinspeccionar
 * @property int|null $reinspeccionarUsuario
 * @property int|null $reinspeccionProvenienciaOrdenInspeccion
 * @property string|null $Primer_Fecha_Programado
 * @property string|null $ifGra
 * @property int|null $cumplioIntimacion
 * @property string|null $fechaInicioTablet
 * @property string|null $fechaFinTablet
 * @property int|null $vinculado
 * @property string|null $revisionObs
 * @property int|null $inspeccionPorTablet
 * @property string|null $Fecha_Vinculado
 * @property int|null $Checklist_blanco
 * @property int|null $cedulas_vencidas
 * @property int|null $clausuras_vigentes
 *
 * @property Area $area
 * @property Circuito $circuito
 * @property Denunciante[] $denunciantes
 * @property Establecimiento $establecimiento
 * @property EncuestaModeloEncuesta $modeloCheckList
 * @property MotivoInspeccion $motivoInspeccion
 * @property MotivosReInspeccion[] $motivosReInspeccions
 */
class OrdenInspeccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orden_inspeccion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modelo_check_list_id', 'area_id', 'circuito_id', 'establecimiento_id', 'checklist', 'id_sap', 'anulada', 'realizada', 'Id_Usuario_Creador', 'Id_Usuario_Modificador', 'eliminada', 'Id_Usuario_Eliminador', 'generaPeligrosos', 'generaPatogenicos', 'generaAvus', 'generaEfluentesLiquidos', 'generaEmisionesGaseosas', 'inscriptoRac', 'tieneTanquesCombustible', 'inscriptoRegLavanderiaTintoreria', 'sinActividadImpactoAmbiental', 'ruido', 'olores', 'ctrlCedula', 'motivo_inspeccion_id', 'autorizacion', 'Id_Usuario_Autorizador', 'completa', 'revisionTablet', 'cerradaAutomaticamente', 'reinspeccionar', 'reinspeccionarUsuario', 'reinspeccionProvenienciaOrdenInspeccion', 'cumplioIntimacion', 'vinculado', 'inspeccionPorTablet', 'Checklist_blanco', 'cedulas_vencidas', 'clausuras_vigentes'], 'integer'],
            [['observaciones'], 'string'],
            [['anulada', 'realizada', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['Fecha_Creado', 'Fecha_Modificado', 'Fecha_Inspeccion_Completa', 'Fecha_Cerrada_Automaticamente', 'Primer_Fecha_Programado', 'fechaInicioTablet', 'fechaFinTablet', 'Fecha_Vinculado'], 'safe'],
            [['suaci'], 'string', 'max' => 11],
            [['observacionesMotivoInspeccion', 'revisionObs'], 'string', 'max' => 2500],
            [['ifGra'], 'string', 'max' => 255],
            [['modelo_check_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaModeloEncuesta::class, 'targetAttribute' => ['modelo_check_list_id' => 'id']],
            [['circuito_id'], 'exist', 'skipOnError' => true, 'targetClass' => Circuito::class, 'targetAttribute' => ['circuito_id' => 'id']],
            [['establecimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['establecimiento_id' => 'id']],
            [['area_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::class, 'targetAttribute' => ['area_id' => 'id']],
            [['motivo_inspeccion_id'], 'exist', 'skipOnError' => true, 'targetClass' => MotivoInspeccion::class, 'targetAttribute' => ['motivo_inspeccion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelo_check_list_id' => 'Modelo Check List ID',
            'area_id' => 'Area ID',
            'circuito_id' => 'Circuito ID',
            'establecimiento_id' => 'Establecimiento ID',
            'checklist' => 'Checklist',
            'id_sap' => 'Id Sap',
            'observaciones' => 'Observaciones',
            'anulada' => 'Anulada',
            'realizada' => 'Realizada',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
            'eliminada' => 'Eliminada',
            'Id_Usuario_Eliminador' => 'Id Usuario Eliminador',
            'generaPeligrosos' => 'Genera Peligrosos',
            'generaPatogenicos' => 'Genera Patogenicos',
            'generaAvus' => 'Genera Avus',
            'generaEfluentesLiquidos' => 'Genera Efluentes Liquidos',
            'generaEmisionesGaseosas' => 'Genera Emisiones Gaseosas',
            'inscriptoRac' => 'Inscripto Rac',
            'tieneTanquesCombustible' => 'Tiene Tanques Combustible',
            'inscriptoRegLavanderiaTintoreria' => 'Inscripto Reg Lavanderia Tintoreria',
            'sinActividadImpactoAmbiental' => 'Sin Actividad Impacto Ambiental',
            'ruido' => 'Ruido',
            'suaci' => 'Suaci',
            'olores' => 'Olores',
            'ctrlCedula' => 'Ctrl Cedula',
            'motivo_inspeccion_id' => 'Motivo Inspeccion ID',
            'observacionesMotivoInspeccion' => 'Observaciones Motivo Inspeccion',
            'autorizacion' => 'Autorizacion',
            'Id_Usuario_Autorizador' => 'Id Usuario Autorizador',
            'completa' => 'Completa',
            'Fecha_Inspeccion_Completa' => 'Fecha Inspeccion Completa',
            'revisionTablet' => 'Revision Tablet',
            'cerradaAutomaticamente' => 'Cerrada Automaticamente',
            'Fecha_Cerrada_Automaticamente' => 'Fecha Cerrada Automaticamente',
            'reinspeccionar' => 'Reinspeccionar',
            'reinspeccionarUsuario' => 'Reinspeccionar Usuario',
            'reinspeccionProvenienciaOrdenInspeccion' => 'Reinspeccion Proveniencia Orden Inspeccion',
            'Primer_Fecha_Programado' => 'Primer Fecha Programado',
            'ifGra' => 'If Gra',
            'cumplioIntimacion' => 'Cumplio Intimacion',
            'fechaInicioTablet' => 'Fecha Inicio Tablet',
            'fechaFinTablet' => 'Fecha Fin Tablet',
            'vinculado' => 'Vinculado',
            'revisionObs' => 'Revision Obs',
            'inspeccionPorTablet' => 'Inspeccion Por Tablet',
            'Fecha_Vinculado' => 'Fecha Vinculado',
            'Checklist_blanco' => 'Checklist Blanco',
            'cedulas_vencidas' => 'Cedulas Vencidas',
            'clausuras_vigentes' => 'Clausuras Vigentes',
        ];
    }

    /**
     * Gets query for [[Area]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\AreaQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::class, ['id' => 'area_id']);
    }

    /**
     * Gets query for [[Circuito]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CircuitoQuery
     */
    public function getCircuito()
    {
        return $this->hasOne(Circuito::class, ['id' => 'circuito_id']);
    }

    /**
     * Gets query for [[Denunciantes]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DenuncianteQuery
     */
    public function getDenunciantes()
    {
        return $this->hasMany(Denunciante::class, ['orden_inspeccion_id' => 'id']);
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
     * Gets query for [[ModeloCheckList]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaModeloEncuestaQuery
     */
    public function getModeloCheckList()
    {
        return $this->hasOne(EncuestaModeloEncuesta::class, ['id' => 'modelo_check_list_id']);
    }

    /**
     * Gets query for [[MotivoInspeccion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\MotivoInspeccionQuery
     */
    public function getMotivoInspeccion()
    {
        return $this->hasOne(MotivoInspeccion::class, ['id' => 'motivo_inspeccion_id']);
    }

    /**
     * Gets query for [[MotivosReInspeccions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\MotivosReInspeccionQuery
     */
    public function getMotivosReInspeccions()
    {
        return $this->hasMany(MotivosReInspeccion::class, ['orden_inspeccion_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\OrdenInspeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrdenInspeccionQuery(get_called_class());
    }
}
