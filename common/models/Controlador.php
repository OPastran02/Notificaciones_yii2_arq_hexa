<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%controladores}}".
 *
 * @property int $id
 * @property int|null $reparticion_id
 * @property string $nombre
 * @property string $apellido
 * @property int $numero
 *
 * @property DisposicionClausura[] $disposicionClausuras
 * @property Reparticion $reparticion
 */
class Controlador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%controladores}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reparticion_id', 'numero'], 'integer'],
            [['nombre', 'apellido', 'numero'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['apellido'], 'string', 'max' => 255],
            [['reparticion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reparticion::class, 'targetAttribute' => ['reparticion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reparticion_id' => 'Reparticion ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'numero' => 'Numero',
        ];
    }

    /**
     * Gets query for [[DisposicionClausuras]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicionClausuras()
    {
        return $this->hasMany(DisposicionClausura::class, ['controlador_id' => 'id']);
    }

    /**
     * Gets query for [[Reparticion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ReparticionQuery
     */
    public function getReparticion()
    {
        return $this->hasOne(Reparticion::class, ['id' => 'reparticion_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ControladorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ControladorQuery(get_called_class());
    }
}
