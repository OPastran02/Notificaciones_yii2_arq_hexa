<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta_utilizada}}".
 *
 * @property int $id
 * @property int|null $areas_id
 * @property int|null $Sap
 * @property int|null $checklist
 * @property int $comprobado
 * @property string|null $puntoencuentro
 * @property string $fechaInspeccion
 * @property string|null $dominioL
 * @property int|null $dominioR
 * @property int|null $interno
 * @property string|null $marca
 * @property string|null $modelo
 * @property float|null $ruido
 * @property float|null $humo
 * @property string $fechaRecepcion
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property ActaMotivo[] $actaMotivos
 * @property ActaUtilizadaMotivo[] $actaUtilizadaMotivos
 * @property Area $areas
 * @property Acta $id0
 */
class ActaUtilizada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta_utilizada}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'comprobado', 'fechaInspeccion', 'fechaRecepcion', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['id', 'areas_id', 'Sap', 'checklist', 'comprobado', 'dominioR', 'interno', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['fechaInspeccion', 'fechaRecepcion', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['ruido', 'humo'], 'number'],
            [['puntoencuentro'], 'string', 'max' => 150],
            [['dominioL'], 'string', 'max' => 4],
            [['marca', 'modelo'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['areas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::class, 'targetAttribute' => ['areas_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Acta::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'areas_id' => 'Areas ID',
            'Sap' => 'Sap',
            'checklist' => 'Checklist',
            'comprobado' => 'Comprobado',
            'puntoencuentro' => 'Puntoencuentro',
            'fechaInspeccion' => 'Fecha Inspeccion',
            'dominioL' => 'Dominio L',
            'dominioR' => 'Dominio R',
            'interno' => 'Interno',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'ruido' => 'Ruido',
            'humo' => 'Humo',
            'fechaRecepcion' => 'Fecha Recepcion',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[ActaMotivos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaMotivoQuery
     */
    public function getActaMotivos()
    {
        return $this->hasMany(ActaMotivo::class, ['id' => 'id_acta_motivo'])->viaTable('{{%acta_utilizada_motivo}}', ['id_acta_utilizada' => 'id']);
    }

    /**
     * Gets query for [[ActaUtilizadaMotivos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaMotivoQuery
     */
    public function getActaUtilizadaMotivos()
    {
        return $this->hasMany(ActaUtilizadaMotivo::class, ['id_acta_utilizada' => 'id']);
    }

    /**
     * Gets query for [[Areas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\AreaQuery
     */
    public function getAreas()
    {
        return $this->hasOne(Area::class, ['id' => 'areas_id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaQuery
     */
    public function getId0()
    {
        return $this->hasOne(Acta::class, ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActaUtilizadaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaUtilizadaQuery(get_called_class());
    }
}
