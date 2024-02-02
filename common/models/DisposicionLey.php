<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%disposicion_ley}}".
 *
 * @property int $disposicion_id
 * @property int $ley_id
 *
 * @property DisposicionClausura $disposicion
 * @property LeyesClausura $ley
 */
class DisposicionLey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%disposicion_ley}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disposicion_id', 'ley_id'], 'required'],
            [['disposicion_id', 'ley_id'], 'integer'],
            [['disposicion_id', 'ley_id'], 'unique', 'targetAttribute' => ['disposicion_id', 'ley_id']],
            [['ley_id'], 'exist', 'skipOnError' => true, 'targetClass' => LeyesClausura::class, 'targetAttribute' => ['ley_id' => 'id']],
            [['disposicion_id'], 'exist', 'skipOnError' => true, 'targetClass' => DisposicionClausura::class, 'targetAttribute' => ['disposicion_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'disposicion_id' => 'Disposicion ID',
            'ley_id' => 'Ley ID',
        ];
    }

    /**
     * Gets query for [[Disposicion]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicion()
    {
        return $this->hasOne(DisposicionClausura::class, ['id' => 'disposicion_id']);
    }

    /**
     * Gets query for [[Ley]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\LeyesClausuraQuery
     */
    public function getLey()
    {
        return $this->hasOne(LeyesClausura::class, ['id' => 'ley_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DisposicionLeyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DisposicionLeyQuery(get_called_class());
    }
}
