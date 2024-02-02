<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta_asignacion}}".
 *
 * @property int $id
 * @property int|null $acta_id
 * @property int|null $inspector_id
 * @property string $fecha
 * @property string $Fecha_Creado
 * @property int $Id_Usuario_Creador
 * @property string $Fecha_Modificado
 * @property int $Id_Usuario_Modificador
 *
 * @property Acta $acta
 * @property Usuarios $inspector
 */
class ActaAsignacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta_asignacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['acta_id', 'inspector_id', 'Id_Usuario_Creador', 'Id_Usuario_Modificador'], 'integer'],
            [['fecha', 'Fecha_Creado', 'Id_Usuario_Creador', 'Fecha_Modificado', 'Id_Usuario_Modificador'], 'required'],
            [['fecha', 'Fecha_Creado', 'Fecha_Modificado'], 'safe'],
            [['acta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Acta::class, 'targetAttribute' => ['acta_id' => 'id']],
            [['inspector_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['inspector_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acta_id' => 'Acta ID',
            'inspector_id' => 'Inspector ID',
            'fecha' => 'Fecha',
            'Fecha_Creado' => 'Fecha Creado',
            'Id_Usuario_Creador' => 'Id Usuario Creador',
            'Fecha_Modificado' => 'Fecha Modificado',
            'Id_Usuario_Modificador' => 'Id Usuario Modificador',
        ];
    }

    /**
     * Gets query for [[Acta]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaQuery
     */
    public function getActa()
    {
        return $this->hasOne(Acta::class, ['id' => 'acta_id']);
    }

    /**
     * Gets query for [[Inspector]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getInspector()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'inspector_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActaAsignacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaAsignacionQuery(get_called_class());
    }
}
