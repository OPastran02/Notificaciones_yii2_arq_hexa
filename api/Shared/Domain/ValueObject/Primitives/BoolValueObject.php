<?php

declare(strict_types=1);

namespace api\Shared\Domain\ValueObject\Primitives;

abstract class BoolValueObject
{
    public function __construct(private bool $value)
    {
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function equals(self $other): bool
    {
        return $this->value() === $other->value();
    }

    public function __toString(): string
    {
        return $this->value() ? 'true' : 'false';
    }
}
