<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%encuesta_falta}}".
 *
 * @property int $id
 * @property int|null $grupo_id
 * @property string $flata
 * @property string $texto_falta
 * @property int $clausura
 *
 * @property EncuestaAgrupacionFaltas[] $encuestaAgrupacionFaltas
 * @property EncuestaAgrupacionFaltas[] $encuestaAgrupacionFaltas0
 * @property EncuestaFalta[] $faltaId1s
 * @property EncuestaFalta[] $faltaId2s
 * @property EncuestaRequisitosPreguntaGrupo $grupo
 */
class EncuestaFalta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%encuesta_falta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grupo_id', 'clausura'], 'integer'],
            [['flata', 'texto_falta', 'clausura'], 'required'],
            [['flata'], 'string', 'max' => 255],
            [['texto_falta'], 'string', 'max' => 500],
            [['grupo_id'], 'exist', 'skipOnError' => true, 'targetClass' => EncuestaRequisitosPreguntaGrupo::class, 'targetAttribute' => ['grupo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grupo_id' => 'Grupo ID',
            'flata' => 'Flata',
            'texto_falta' => 'Texto Falta',
            'clausura' => 'Clausura',
        ];
    }

    /**
     * Gets query for [[EncuestaAgrupacionFaltas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaAgrupacionFaltasQuery
     */
    public function getEncuestaAgrupacionFaltas()
    {
        return $this->hasMany(EncuestaAgrupacionFaltas::class, ['falta_id1' => 'id']);
    }

    /**
     * Gets query for [[EncuestaAgrupacionFaltas0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaAgrupacionFaltasQuery
     */
    public function getEncuestaAgrupacionFaltas0()
    {
        return $this->hasMany(EncuestaAgrupacionFaltas::class, ['falta_id2' => 'id']);
    }

    /**
     * Gets query for [[FaltaId1s]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaFaltaQuery
     */
    public function getFaltaId1s()
    {
        return $this->hasMany(EncuestaFalta::class, ['id' => 'falta_id1'])->viaTable('{{%encuesta_agrupacion_faltas}}', ['falta_id2' => 'id']);
    }

    /**
     * Gets query for [[FaltaId2s]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaFaltaQuery
     */
    public function getFaltaId2s()
    {
        return $this->hasMany(EncuestaFalta::class, ['id' => 'falta_id2'])->viaTable('{{%encuesta_agrupacion_faltas}}', ['falta_id1' => 'id']);
    }

    /**
     * Gets query for [[Grupo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EncuestaRequisitosPreguntaGrupoQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(EncuestaRequisitosPreguntaGrupo::class, ['id' => 'grupo_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EncuestaFaltaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EncuestaFaltaQuery(get_called_class());
    }
}
