<?php

declare(strict_types=1);

namespace api\Core\Acta\Acta\Domain\ValueObject;

api\Shared\Domain\ValueObject\Primitives\StringValueObject;

final class Fechadecreaciongedoformulario extends StringValueObject
{

   protected string $value;

   public function __construct(string $value)
   {
      parent::__construct($value);
      $this->value = $value;
   }

   public function value(): string
   {
      return $this->value = $value;
   }

}