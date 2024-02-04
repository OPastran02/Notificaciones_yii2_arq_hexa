<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain\ValueObject;

api\Shared\Domain\ValueObject\Primitives\IntValueObject;

final class Ambiente extends IntValueObject
{

   protected int $value;

   public function __construct(int $value)
   {
      parent::__construct($value);
      $this->value = $value;
   }

   public function value(): int
   {
      return $this->value = $value;
   }

}