<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CorreccionRuido]].
 *
 * @see \common\models\CorreccionRuido
 */
class CorreccionRuidoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\CorreccionRuido[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\CorreccionRuido|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
