<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%inspecciones_resultados_fotos}}".
 *
 * @property int $id
 * @property int|null $resultado_id
 * @property string $foto
 * @property int $orden
 *
 * @property InspeccionesResultados $resultado
 */
class InspeccionResultadoFoto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%inspecciones_resultados_fotos}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resultado_id', 'orden'], 'integer'],
            [['foto', 'orden'], 'required'],
            [['foto'], 'string'],
            [['resultado_id'], 'exist', 'skipOnError' => true, 'targetClass' => InspeccionesResultados::class, 'targetAttribute' => ['resultado_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resultado_id' => 'Resultado ID',
            'foto' => 'Foto',
            'orden' => 'Orden',
        ];
    }

    /**
     * Gets query for [[Resultado]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\InspeccionesResultadosQuery
     */
    public function getResultado()
    {
        return $this->hasOne(InspeccionesResultados::class, ['id' => 'resultado_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\InspeccionResultadoFotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\InspeccionResultadoFotoQuery(get_called_class());
    }
}
