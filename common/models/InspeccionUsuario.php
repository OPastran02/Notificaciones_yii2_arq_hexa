<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%inspeccion_usuario}}".
 *
 * @property int $inspeccion_id
 * @property int $usuario_id
 *
 * @property Inspeccion $inspeccion
 * @property Usuarios $usuario
 */
class InspeccionUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%inspeccion_usuario}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inspeccion_id', 'usuario_id'], 'required'],
            [['inspeccion_id', 'usuario_id'], 'integer'],
            [['inspeccion_id', 'usuario_id'], 'unique', 'targetAttribute' => ['inspeccion_id', 'usuario_id']],
            [['inspeccion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Inspeccion::class, 'targetAttribute' => ['inspeccion_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inspeccion_id' => 'Inspeccion ID',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * Gets query for [[Inspeccion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\InspeccionQuery
     */
    public function getInspeccion()
    {
        return $this->hasOne(Inspeccion::class, ['id' => 'inspeccion_id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'usuario_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InspeccionUsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InspeccionUsuarioQuery(get_called_class());
    }
}
