<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\EncuestaRequisitosRespuesta]].
 *
 * @see \common\models\EncuestaRequisitosRespuesta
 */
class EncuestaRequisitosRespuestaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\EncuestaRequisitosRespuesta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\EncuestaRequisitosRespuesta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
