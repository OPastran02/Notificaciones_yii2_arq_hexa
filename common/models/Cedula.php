<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cedula}}".
 *
 * @property int $id
 * @property int|null $tipo_id
 * @property int|null $numero
 * @property string|null $nombreDestinatario
 * @property string|null $actuacion
 * @property int $activar_vencimiento
 * @property int $fojas
 * @property string $cuerpo
 *
 * @property Notificacion $id0
 * @property TipoCedula $tipo
 */
class Cedula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cedula}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'activar_vencimiento', 'fojas', 'cuerpo'], 'required'],
            [['id', 'tipo_id', 'numero', 'activar_vencimiento', 'fojas'], 'integer'],
            [['cuerpo'], 'string'],
            [['nombreDestinatario'], 'string', 'max' => 150],
            [['actuacion'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['numero'], 'unique'],
            [['tipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoCedula::class, 'targetAttribute' => ['tipo_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Notificacion::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_id' => 'Tipo ID',
            'numero' => 'Numero',
            'nombreDestinatario' => 'Nombre Destinatario',
            'actuacion' => 'Actuacion',
            'activar_vencimiento' => 'Activar Vencimiento',
            'fojas' => 'Fojas',
            'cuerpo' => 'Cuerpo',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\NotificacionQuery
     */
    public function getId0()
    {
        return $this->hasOne(Notificacion::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoCedulaQuery
     */
    public function getTipo()
    {
        return $this->hasOne(TipoCedula::class, ['id' => 'tipo_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CedulaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CedulaQuery(get_called_class());
    }
}
