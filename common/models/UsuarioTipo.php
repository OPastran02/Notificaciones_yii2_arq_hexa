<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%usuario_tipo}}".
 *
 * @property int $id
 * @property string $tipo_usuario
 *
 * @property Usuarios[] $usuarios
 * @property UsuariosTipousuarios[] $usuariosTipousuarios
 */
class UsuarioTipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usuario_tipo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_usuario'], 'required'],
            [['tipo_usuario'], 'string', 'max' => 50],
            [['tipo_usuario'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_usuario' => 'Tipo Usuario',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id' => 'id_usuario'])->viaTable('{{%usuarios_tipousuarios}}', ['id_tipo_usuario' => 'id']);
    }

    /**
     * Gets query for [[UsuariosTipousuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosTipousuariosQuery
     */
    public function getUsuariosTipousuarios()
    {
        return $this->hasMany(UsuariosTipousuarios::class, ['id_tipo_usuario' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UsuarioTipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UsuarioTipoQuery(get_called_class());
    }
}
