<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta}}".
 *
 * @property int $id
 * @property int|null $id_inspeccion
 * @property int|null $estado_id
 * @property string $Serie
 * @property int $Numero
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 * @property string $NumeroGedoFormulario
 * @property string $FechaDeCreacionGedoFormulario
 * @property string $NumeroActaGedoFormulario
 *
 * @property ActaAsignacion[] $actaAsignacions
 * @property ActaUtilizada $actaUtilizada
 */
class Acta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_inspeccion', 'estado_id', 'Numero', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['Serie', 'Numero', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador', 'NumeroGedoFormulario', 'FechaDeCreacionGedoFormulario', 'NumeroActaGedoFormulario'], 'required'],
            [['Fecha_Creado', 'Fecha_Modificado', 'FechaDeCreacionGedoFormulario'], 'safe'],
            [['Serie'], 'string', 'max' => 2],
            [['NumeroGedoFormulario'], 'string', 'max' => 100],
            [['NumeroActaGedoFormulario'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_inspeccion' => 'Id Inspeccion',
            'estado_id' => 'Estado ID',
            'Serie' => 'Serie',
            'Numero' => 'Numero',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
            'NumeroGedoFormulario' => 'Numero Gedo Formulario',
            'FechaDeCreacionGedoFormulario' => 'Fecha De Creacion Gedo Formulario',
            'NumeroActaGedoFormulario' => 'Numero Acta Gedo Formulario',
        ];
    }

    /**
     * Gets query for [[ActaAsignacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaAsignacionQuery
     */
    public function getActaAsignacions()
    {
        return $this->hasMany(ActaAsignacion::class, ['acta_id' => 'id']);
    }

    /**
     * Gets query for [[ActaUtilizada]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaQuery
     */
    public function getActaUtilizada()
    {
        return $this->hasOne(ActaUtilizada::class, ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaQuery(get_called_class());
    }
}
