<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%notificacion}}".
 *
 * @property int $id
 * @property int $id_pedido
 * @property int $establecimiento_id
 * @property int|null $notificador_id
 * @property int|null $estado_id
 * @property int $plazo1
 * @property int $plazo2
 * @property string|null $fecha_entrega
 * @property string|null $fecha_devolucion
 * @property string|null $fecha_notificacion
 * @property string|null $fecha_envio_firma
 * @property string|null $fecha_vuelta_firma
 * @property int $usuario_modificador
 * @property string $fecha_modificado
 * @property int|null $prorroga
 * @property int|null $presentacion_agregar
 * @property int|null $art61
 * @property int|null $citacion
 * @property int|null $nocturnidad
 * @property string|null $observaciones
 * @property string $direccion_notificada
 * @property int $comuna_notificada
 * @property string $tipo_domicilio_notificado
 * @property float $Lon
 * @property float $Lat
 * @property int|null $usuario_eliminador
 *
 * @property Cedula $cedula
 * @property Establecimiento $establecimiento
 * @property EstadoNotificacion $estado
 * @property Usuarios $notificador
 * @property Pedido $pedido
 */
class Notificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%notificacion}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pedido', 'establecimiento_id', 'plazo1', 'plazo2', 'usuario_modificador', 'fecha_modificado', 'direccion_notificada', 'comuna_notificada', 'tipo_domicilio_notificado', 'Lon', 'Lat'], 'required'],
            [['id_pedido', 'establecimiento_id', 'notificador_id', 'estado_id', 'plazo1', 'plazo2', 'usuario_modificador', 'prorroga', 'presentacion_agregar', 'art61', 'citacion', 'nocturnidad', 'comuna_notificada', 'usuario_eliminador'], 'integer'],
            [['fecha_entrega', 'fecha_devolucion', 'fecha_notificacion', 'fecha_envio_firma', 'fecha_vuelta_firma', 'fecha_modificado'], 'safe'],
            [['observaciones'], 'string'],
            [['Lon', 'Lat'], 'number'],
            [['direccion_notificada'], 'string', 'max' => 100],
            [['tipo_domicilio_notificado'], 'string', 'max' => 1],
            [['notificador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::class, 'targetAttribute' => ['notificador_id' => 'id']],
            [['establecimiento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::class, 'targetAttribute' => ['establecimiento_id' => 'id']],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoNotificacion::class, 'targetAttribute' => ['estado_id' => 'id']],
            [['id_pedido'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::class, 'targetAttribute' => ['id_pedido' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pedido' => 'Id Pedido',
            'establecimiento_id' => 'Establecimiento ID',
            'notificador_id' => 'Notificador ID',
            'estado_id' => 'Estado ID',
            'plazo1' => 'Plazo1',
            'plazo2' => 'Plazo2',
            'fecha_entrega' => 'Fecha Entrega',
            'fecha_devolucion' => 'Fecha Devolucion',
            'fecha_notificacion' => 'Fecha Notificacion',
            'fecha_envio_firma' => 'Fecha Envio Firma',
            'fecha_vuelta_firma' => 'Fecha Vuelta Firma',
            'usuario_modificador' => 'Usuario Modificador',
            'fecha_modificado' => 'Fecha Modificado',
            'prorroga' => 'Prorroga',
            'presentacion_agregar' => 'Presentacion Agregar',
            'art61' => 'Art61',
            'citacion' => 'Citacion',
            'nocturnidad' => 'Nocturnidad',
            'observaciones' => 'Observaciones',
            'direccion_notificada' => 'Direccion Notificada',
            'comuna_notificada' => 'Comuna Notificada',
            'tipo_domicilio_notificado' => 'Tipo Domicilio Notificado',
            'Lon' => 'Lon',
            'Lat' => 'Lat',
            'usuario_eliminador' => 'Usuario Eliminador',
        ];
    }

    /**
     * Gets query for [[Cedula]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CedulaQuery
     */
    public function getCedula()
    {
        return $this->hasOne(Cedula::class, ['id' => 'id']);
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
     * Gets query for [[Estado]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EstadoNotificacionQuery
     */
    public function getEstado()
    {
        return $this->hasOne(EstadoNotificacion::class, ['id' => 'estado_id']);
    }

    /**
     * Gets query for [[Notificador]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UsuariosQuery
     */
    public function getNotificador()
    {
        return $this->hasOne(Usuarios::class, ['id' => 'notificador_id']);
    }

    /**
     * Gets query for [[Pedido]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PedidoQuery
     */
    public function getPedido()
    {
        return $this->hasOne(Pedido::class, ['id' => 'id_pedido']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NotificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NotificacionQuery(get_called_class());
    }
}
