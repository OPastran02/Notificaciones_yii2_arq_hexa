<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\DisposicionLey]].
 *
 * @see \common\models\DisposicionLey
 */
class DisposicionLeyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\DisposicionLey[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\DisposicionLey|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
