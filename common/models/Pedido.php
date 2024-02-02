<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%pedido}}".
 *
 * @property int $id
 * @property int|null $usuario_autorizador_id
 * @property string $fecha_creado
 * @property int $usuario_creador
 * @property string|null $fecha_autorizado
 *
 * @property Notificacion[] $notificacions
 * @property Usuarios $usuarioAutorizador
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pedido}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_autorizador_id', 'usuario_creador'], 'integer'],
            [['fecha_creado', 'usuario_creador'], 'required'],
            [['fecha_creado', 'fecha_autorizado'], 'safe'],
            [['usuario_autorizador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['usuario_autorizador_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario_autorizador_id' => 'Usuario Autorizador ID',
            'fecha_creado' => 'Fecha Creado',
            'usuario_creador' => 'Usuario Creador',
            'fecha_autorizado' => 'Fecha Autorizado',
        ];
    }

    /**
     * Gets query for [[Notificacions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NotificacionQuery
     */
    public function getNotificacions()
    {
        return $this->hasMany(Notificacion::class, ['id_pedido' => 'id']);
    }

    /**
     * Gets query for [[UsuarioAutorizador]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getUsuarioAutorizador()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'usuario_autorizador_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PedidoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PedidoQuery(get_called_class());
    }
}
