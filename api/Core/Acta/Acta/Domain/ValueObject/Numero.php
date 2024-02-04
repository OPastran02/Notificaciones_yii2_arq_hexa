<?php

declare(strict_types=1);

namespace api\Core\Acta\Acta\Domain\ValueObject;

api\Shared\Domain\ValueObject\Primitives\IntValueObject;

final class Numero extends IntValueObject
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