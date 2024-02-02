<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Vibracion]].
 *
 * @see \common\models\Vibracion
 */
class VibracionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Vibracion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Vibracion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
