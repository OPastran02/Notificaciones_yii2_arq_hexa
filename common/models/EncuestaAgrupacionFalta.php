<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_agrupacion_faltas}}".
 *
 * @property int $falta_id1
 * @property int $falta_id2
 *
 * @property EncuestaFalta $faltaId1
 * @property EncuestaFalta $faltaId2
 */
class EncuestaAgrupacionFalta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_agrupacion_faltas}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['falta_id1', 'falta_id2'], 'required'],
            [['falta_id1', 'falta_id2'], 'integer'],
            [['falta_id1', 'falta_id2'], 'unique', 'targetAttribute' => ['falta_id1', 'falta_id2']],
            [['falta_id1'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaFalta::class, 'targetAttribute' => ['falta_id1' => 'id']],
            [['falta_id2'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaFalta::class, 'targetAttribute' => ['falta_id2' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'falta_id1' => 'Falta Id1',
            'falta_id2' => 'Falta Id2',
        ];
    }

    /**
     * Gets query for [[FaltaId1]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaFaltaQuery
     */
    public function getFaltaId1()
    {
        return $this->hasOne(EncuestaFalta::class, ['id' => 'falta_id1']);
    }

    /**
     * Gets query for [[FaltaId2]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaFaltaQuery
     */
    public function getFaltaId2()
    {
        return $this->hasOne(EncuestaFalta::class, ['id' => 'falta_id2']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaAgrupacionFaltaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaAgrupacionFaltaQuery(get_called_class());
    }
}
