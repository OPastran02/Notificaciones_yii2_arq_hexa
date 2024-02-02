<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%historial}}".
 *
 * @property int $id
 * @property int|null $usuario_motificador_id
 * @property int $idTabla
 * @property string $tabla
 * @property string $campo
 * @property string $fecha
 * @property string $valorAnterior
 * @property string $valorNuevo
 *
 * @property Usuarios $usuarioMotificador
 */
class Historial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%historial}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_motificador_id', 'idTabla'], 'integer'],
            [['idTabla', 'tabla', 'campo', 'fecha', 'valorAnterior', 'valorNuevo'], 'required'],
            [['fecha'], 'safe'],
            [['valorAnterior', 'valorNuevo'], 'string'],
            [['tabla', 'campo'], 'string', 'max' => 150],
            [['usuario_motificador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['usuario_motificador_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario_motificador_id' => 'Usuario Motificador ID',
            'idTabla' => 'Id Tabla',
            'tabla' => 'Tabla',
            'campo' => 'Campo',
            'fecha' => 'Fecha',
            'valorAnterior' => 'Valor Anterior',
            'valorNuevo' => 'Valor Nuevo',
        ];
    }

    /**
     * Gets query for [[UsuarioMotificador]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarioMotificador()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'usuario_motificador_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\HistorialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HistorialQuery(get_called_class());
    }
}
