<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_agrupacion_siguiente_pregunta}}".
 *
 * @property int $siguientpregunta_id1
 * @property int $siguientepregunta_id2
 *
 * @property EncuestaSiguientePregunta $siguientepreguntaId2
 * @property EncuestaSiguientePregunta $siguientpreguntaId1
 */
class EncuestaAgrupacionSiguientePregunta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_agrupacion_siguiente_pregunta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['siguientpregunta_id1', 'siguientepregunta_id2'], 'required'],
            [['siguientpregunta_id1', 'siguientepregunta_id2'], 'integer'],
            [['siguientpregunta_id1', 'siguientepregunta_id2'], 'unique', 'targetAttribute' => ['siguientpregunta_id1', 'siguientepregunta_id2']],
            [['siguientepregunta_id2'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaSiguientePregunta::class, 'targetAttribute' => ['siguientepregunta_id2' => 'id']],
            [['siguientpregunta_id1'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaSiguientePregunta::class, 'targetAttribute' => ['siguientpregunta_id1' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'siguientpregunta_id1' => 'Siguientpregunta Id1',
            'siguientepregunta_id2' => 'Siguientepregunta Id2',
        ];
    }

    /**
     * Gets query for [[SiguientepreguntaId2]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getSiguientepreguntaId2()
    {
        return $this->hasOne(EncuestaSiguientePregunta::class, ['id' => 'siguientepregunta_id2']);
    }

    /**
     * Gets query for [[SiguientpreguntaId1]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaSiguientePreguntaQuery
     */
    public function getSiguientpreguntaId1()
    {
        return $this->hasOne(EncuestaSiguientePregunta::class, ['id' => 'siguientpregunta_id1']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaAgrupacionSiguientePreguntaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaAgrupacionSiguientePreguntaQuery(get_called_class());
    }
}
