<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\TramiteEfluentes]].
 *
 * @see \common\models\TramiteEfluentes
 */
class TramiteEfluentesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\TramiteEfluentes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\TramiteEfluentes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
