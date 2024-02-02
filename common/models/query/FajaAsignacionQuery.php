<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\FajaAsignacion]].
 *
 * @see \common\models\FajaAsignacion
 */
class FajaAsignacionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\FajaAsignacion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\FajaAsignacion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
