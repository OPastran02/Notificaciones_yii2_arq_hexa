<?php

declare(strict_types=1);

namespace Core\Shared\Domain\ValueObject;

class StringValueObject
{
    protected ?string $value;

    public function __construct(?string $value)
    {
        $this->value = $value;
    }

    public function value(): ?string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value();
    }

    public static function fromPrimitives($primitive): self
    {
        return new static( (string) $primitive);
    }

    public function isEqual(StringValueObject $other): bool
    {
        return $this->value() === $other->value();
    }

    public function isNotEqual(StringValueObject $other): bool
    {
        return $this->value() !== $other->value();
    }
}
