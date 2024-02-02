<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%acta_motivo}}".
 *
 * @property int $id
 * @property string $motivo
 * @property string $motivoCompleto
 * @property string $tipo
 *
 * @property ActaUtilizadaMotivo[] $actaUtilizadaMotivos
 * @property ActaUtilizada[] $actaUtilizadas
 */
class ActaMotivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%acta_motivo}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['motivo', 'motivoCompleto', 'tipo'], 'required'],
            [['motivo'], 'string', 'max' => 10],
            [['motivoCompleto'], 'string', 'max' => 150],
            [['tipo'], 'string', 'max' => 1],
            [['motivo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'motivo' => 'Motivo',
            'motivoCompleto' => 'Motivo Completo',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * Gets query for [[ActaUtilizadaMotivos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaMotivoQuery
     */
    public function getActaUtilizadaMotivos()
    {
        return $this->hasMany(ActaUtilizadaMotivo::class, ['id_acta_motivo' => 'id']);
    }

    /**
     * Gets query for [[ActaUtilizadas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ActaUtilizadaQuery
     */
    public function getActaUtilizadas()
    {
        return $this->hasMany(ActaUtilizada::class, ['id' => 'id_acta_utilizada'])->viaTable('{{%acta_utilizada_motivo}}', ['id_acta_motivo' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ActaMotivoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ActaMotivoQuery(get_called_class());
    }
}
