<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%leyes_clausura}}".
 *
 * @property int $id
 * @property string $Ley
 *
 * @property DisposicionLey[] $disposicionLeys
 * @property DisposicionClausura[] $disposicions
 */
class LeyesClausura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%leyes_clausura}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ley'], 'required'],
            [['Ley'], 'string', 'max' => 100],
            [['Ley'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Ley' => 'Ley',
        ];
    }

    /**
     * Gets query for [[DisposicionLeys]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionLeyQuery
     */
    public function getDisposicionLeys()
    {
        return $this->hasMany(DisposicionLey::class, ['ley_id' => 'id']);
    }

    /**
     * Gets query for [[Disposicions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DisposicionClausuraQuery
     */
    public function getDisposicions()
    {
        return $this->hasMany(DisposicionClausura::class, ['id' => 'disposicion_id'])->viaTable('{{%disposicion_ley}}', ['ley_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LeyesClausuraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LeyesClausuraQuery(get_called_class());
    }
}
