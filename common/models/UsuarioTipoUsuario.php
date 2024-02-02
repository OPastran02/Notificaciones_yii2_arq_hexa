<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%usuarios_tipousuarios}}".
 *
 * @property int $id_usuario
 * @property int $id_tipo_usuario
 *
 * @property UsuarioTipo $tipoUsuario
 * @property Usuarios $usuario
 */
class UsuarioTipoUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usuarios_tipousuarios}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_tipo_usuario'], 'required'],
            [['id_usuario', 'id_tipo_usuario'], 'integer'],
            [['id_usuario', 'id_tipo_usuario'], 'unique', 'targetAttribute' => ['id_usuario', 'id_tipo_usuario']],
            [['id_tipo_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => UsuarioTipo::class, 'targetAttribute' => ['id_tipo_usuario' => 'id']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['id_usuario' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'id_tipo_usuario' => 'Id Tipo Usuario',
        ];
    }

    /**
     * Gets query for [[TipoUsuario]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuarioTipoQuery
     */
    public function getTipoUsuario()
    {
        return $this->hasOne(UsuarioTipo::class, ['id' => 'id_tipo_usuario']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'id_usuario']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UsuarioTipoUsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UsuarioTipoUsuarioQuery(get_called_class());
    }
}
