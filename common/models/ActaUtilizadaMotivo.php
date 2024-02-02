<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta_utilizada_motivo}}".
 *
 * @property int $id_acta_utilizada
 * @property int $id_acta_motivo
 *
 * @property ActaMotivo $actaMotivo
 * @property ActaUtilizada $actaUtilizada
 */
class ActaUtilizadaMotivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta_utilizada_motivo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_acta_utilizada', 'id_acta_motivo'], 'required'],
            [['id_acta_utilizada', 'id_acta_motivo'], 'integer'],
            [['id_acta_utilizada', 'id_acta_motivo'], 'unique', 'targetAttribute' => ['id_acta_utilizada', 'id_acta_motivo']],
            [['id_acta_motivo'], 'exist', 'skipOnError' => true, 'targetClass' => ActaMotivo::class, 'targetAttribute' => ['id_acta_motivo' => 'id']],
            [['id_acta_utilizada'], 'exist', 'skipOnError' => true, 'targetClass' => ActaUtilizada::class, 'targetAttribute' => ['id_acta_utilizada' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_acta_utilizada' => 'Id Acta Utilizada',
            'id_acta_motivo' => 'Id Acta Motivo',
        ];
    }

    /**
     * Gets query for [[ActaMotivo]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaMotivoQuery
     */
    public function getActaMotivo()
    {
        return $this->hasOne(ActaMotivo::class, ['id' => 'id_acta_motivo']);
    }

    /**
     * Gets query for [[ActaUtilizada]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaQuery
     */
    public function getActaUtilizada()
    {
        return $this->hasOne(ActaUtilizada::class, ['id' => 'id_acta_utilizada']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActaUtilizadaMotivoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaUtilizadaMotivoQuery(get_called_class());
    }
}
