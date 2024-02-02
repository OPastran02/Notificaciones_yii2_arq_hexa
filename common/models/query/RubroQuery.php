<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Rubro]].
 *
 * @see \common\models\Rubro
 */
class RubroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Rubro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Rubro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
