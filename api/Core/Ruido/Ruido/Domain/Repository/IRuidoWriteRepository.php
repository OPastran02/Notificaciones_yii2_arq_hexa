<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain\Repository;

interface IRuidoWriteRepository
{
   public function create($Ruido): ?Ruido;
   public function delete($id): void;
   public function update($id,$Ruido):?Ruido;
}