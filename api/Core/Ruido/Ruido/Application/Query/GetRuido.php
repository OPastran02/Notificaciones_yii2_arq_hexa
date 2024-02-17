<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Application;

use api\Core\Ruido\Ruido\Domain\{
   Ruido,
   Repository\IRuidoReadRepository
};

final class GetRuido
{

   public function __invoke(IRuidoReadRepository $repository, $RuidoId) : ?Ruido
   {
       return $this->repository->get($RuidoId);
   }

}

