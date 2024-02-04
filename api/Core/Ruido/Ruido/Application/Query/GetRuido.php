<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Application;

use api\Core\Ruido\Ruido\Dommain\{
   Ruido,
   Repository\IRuidoReadRepository
};

class GetRuido
{
   private IRuidoReadRepository $repository;

   public function __construct(IRuidoReadRepository $repository)
   {
       $this->repository = $repository;
   }

   public function __invoke(string $RuidoId): ?Ruido
   {
       return $this->repository->get($RuidoId);
   }

}

