<?php

declare(strict_types=1);

namespace api\Shared\Domain\ValueObject\Primitives;

abstract class BoolValueObject
{
    protected bool $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public static function fromPrimitives($primitive): self
    {
        return new static( (bool) $primitive);
    }

    public static function true(): self
    {
        return new static( true);
    }

    public static function false(): self
    {
        return new static( false);
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function asInteger(): int
    {
        return (int) $this->value;
    }

    public function isTrue(): bool
    {
        return $this->value === true;
    }

    public function isFalse(): bool
    {
        return $this->value === false;
    }
}
