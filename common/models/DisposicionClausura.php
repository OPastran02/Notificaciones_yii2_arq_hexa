<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%disposicion_clausura}}".
 *
 * @property int $id
 * @property int|null $alcance_id
 * @property int|null $controlador_id
 * @property int|null $tipo_actuacion_remicion_id
 * @property string $fecha_clausura
 * @property int|null $levantada
 * @property string|null $fecha_levantamiento
 * @property int|null $numero_nota_dgai
 * @property int|null $anio_nota_dgai
 * @property int|null $numero_giro_documental
 * @property int|null $anio_giro_documental
 * @property int|null $numero_actuacion_remicion
 * @property int|null $anio_actuacion_remicion
 *
 * @property FajaTipoClausura $alcance
 * @property Controladores $controlador
 * @property DisposicionLey[] $disposicionLeys
 * @property Disposicion $id0
 * @property LeyesClausura[] $leys
 * @property TipoActuacion $tipoActuacionRemicion
 */
class DisposicionClausura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%disposicion_clausura}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fecha_clausura'], 'required'],
            [['id', 'alcance_id', 'controlador_id', 'tipo_actuacion_remicion_id', 'levantada', 'numero_nota_dgai', 'anio_nota_dgai', 'numero_giro_documental', 'anio_giro_documental', 'numero_actuacion_remicion', 'anio_actuacion_remicion'], 'integer'],
            [['fecha_clausura', 'fecha_levantamiento'], 'safe'],
            [['id'], 'unique'],
            [['alcance_id'], 'exist', 'skipOnError' => true, 'targetClass' => FajaTipoClausura::class, 'targetAttribute' => ['alcance_id' => 'id']],
            [['controlador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Controladores::class, 'targetAttribute' => ['controlador_id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Disposicion::class, 'targetAttribute' => ['id' => 'id']],
            [['tipo_actuacion_remicion_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoActuacion::class, 'targetAttribute' => ['tipo_actuacion_remicion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alcance_id' => 'Alcance ID',
            'controlador_id' => 'Controlador ID',
            'tipo_actuacion_remicion_id' => 'Tipo Actuacion Remicion ID',
            'fecha_clausura' => 'Fecha Clausura',
            'levantada' => 'Levantada',
            'fecha_levantamiento' => 'Fecha Levantamiento',
            'numero_nota_dgai' => 'Numero Nota Dgai',
            'anio_nota_dgai' => 'Anio Nota Dgai',
            'numero_giro_documental' => 'Numero Giro Documental',
            'anio_giro_documental' => 'Anio Giro Documental',
            'numero_actuacion_remicion' => 'Numero Actuacion Remicion',
            'anio_actuacion_remicion' => 'Anio Actuacion Remicion',
        ];
    }

    /**
     * Gets query for [[Alcance]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\FajaTipoClausuraQuery
     */
    public function getAlcance()
    {
        return $this->hasOne(FajaTipoClausura::class, ['id' => 'alcance_id']);
    }

    /**
     * Gets query for [[Controlador]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ControladoresQuery
     */
    public function getControlador()
    {
        return $this->hasOne(Controladores::class, ['id' => 'controlador_id']);
    }

    /**
     * Gets query for [[DisposicionLeys]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionLeyQuery
     */
    public function getDisposicionLeys()
    {
        return $this->hasMany(DisposicionLey::class, ['disposicion_id' => 'id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionQuery
     */
    public function getId0()
    {
        return $this->hasOne(Disposicion::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[Leys]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\LeyesClausuraQuery
     */
    public function getLeys()
    {
        return $this->hasMany(LeyesClausura::class, ['id' => 'ley_id'])->viaTable('{{%disposicion_ley}}', ['disposicion_id' => 'id']);
    }

    /**
     * Gets query for [[TipoActuacionRemicion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TipoActuacionQuery
     */
    public function getTipoActuacionRemicion()
    {
        return $this->hasOne(TipoActuacion::class, ['id' => 'tipo_actuacion_remicion_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DisposicionClausuraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DisposicionClausuraQuery(get_called_class());
    }
}
