<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Application;

use api\Core\Ruido\Ruido\Dommain\{
   Ruido,
   Repository\IRuidoReadRepository
};

final class GetRuidoByCriteria
{

   public function __invoke(IRuidoReadRepository $repository, $criteria) : ?array
   {
       return $this->repository->getByCriteria($criteria);
   }

}

