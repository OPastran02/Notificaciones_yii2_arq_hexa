<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Infrastructure\Persistence\ActiveRecord;

use api\Core\Ruido\Ruido\Domain\{
   Ruido,
   Repository\IRuidoWriteRepository
};

use common\models\Ruido as Model;

class RuidoRepositoryActiveRecord implements IRuidoWriteRepository
{

   public function create($arr) : Ruido
   {
       $model = new Model();
       $model->attributes = $arr;
       if ($model->save()) return Ruido::fromPrimitives(...$model->attributes);
   }

}

