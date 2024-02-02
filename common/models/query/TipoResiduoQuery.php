<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\TipoResiduo]].
 *
 * @see \common\models\TipoResiduo
 */
class TipoResiduoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\TipoResiduo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\TipoResiduo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
