<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain\Repository;

interface IRuidoReadRepository
{
   public function get($id) : ?Ruido;
   public function getAll();
   public function getByCriteria($criteria): ?Ruido;
}