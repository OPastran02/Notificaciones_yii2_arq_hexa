<?php

namespace Core\Shared\Domain\ValueObject;

class EmptyIdValueObject extends IdValueObject implements EmptyIdInterface
{
public function __construct(int $value = 0)
{
    parent::__construct(0);
}
}
