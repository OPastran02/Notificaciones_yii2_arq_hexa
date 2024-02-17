<?php

declare(strict_types=1);

namespace Core\Shared\Domain\ValueObject;

class NullableIntValueObject
{
    protected ?int $value;

    public function __construct(?int $value)
    {
        $this->value = $value;
    }

    public function value(): ?int
    {
        return $this->value;
    }

    public function isBiggerThan(NullableIntValueObject $other): bool
    {
        return $this->value() > $other->value();
    }

    public function __toString(): string
    {
        return (string) $this->value();
    }
}

