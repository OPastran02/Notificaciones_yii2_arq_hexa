<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%faja}}".
 *
 * @property int $id
 * @property int $id_estado
 * @property int|null $id_area
 * @property int|null $id_tipo_clausura
 * @property int|null $id_inspeccion
 * @property int $numero
 * @property int|null $id_sap
 * @property int|null $checklist
 * @property string|null $fecha_recepcion
 * @property string|null $fecha_inspeccion
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property FajaAsignacion[] $fajaAsignacions
 */
class Faja extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faja}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_estado', 'numero', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['id_estado', 'id_area', 'id_tipo_clausura', 'id_inspeccion', 'numero', 'id_sap', 'checklist', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['fecha_recepcion', 'fecha_inspeccion', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['numero'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_estado' => 'Id Estado',
            'id_area' => 'Id Area',
            'id_tipo_clausura' => 'Id Tipo Clausura',
            'id_inspeccion' => 'Id Inspeccion',
            'numero' => 'Numero',
            'id_sap' => 'Id Sap',
            'checklist' => 'Checklist',
            'fecha_recepcion' => 'Fecha Recepcion',
            'fecha_inspeccion' => 'Fecha Inspeccion',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[FajaAsignacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FajaAsignacionQuery
     */
    public function getFajaAsignacions()
    {
        return $this->hasMany(FajaAsignacion::class, ['id_faja' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\FajaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\FajaQuery(get_called_class());
    }
}
