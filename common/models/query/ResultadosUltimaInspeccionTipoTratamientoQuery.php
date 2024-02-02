<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ResultadosUltimaInspeccionTipoTratamiento]].
 *
 * @see \common\models\ResultadosUltimaInspeccionTipoTratamiento
 */
class ResultadosUltimaInspeccionTipoTratamientoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\ResultadosUltimaInspeccionTipoTratamiento[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\ResultadosUltimaInspeccionTipoTratamiento|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
