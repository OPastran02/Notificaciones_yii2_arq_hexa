<?php

declare(strict_types=1);

namespace api\Shared\Domain\ValueObject\Primitives;

abstract class FloatValueObject
{
    protected float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public static function fromPrimitives($primitive): self
    {
        return new static( (float) $primitive);
    }

    public function value(): float
    {
        return $this->value;
    }

    public function isEqual(FloatValueObject $other): bool
    {
        return $this->round($this->value()) === $this->round($other->value());
    }

    public function isNotEqual(FloatValueObject $other): bool
    {
        return $this->round($this->value()) !== $this->round($other->value());
    }

    public function isBiggerThan(FloatValueObject $other): bool
    {
        return $this->round($this->value()) > $this->round($other->value());
    }


    public function __toString(): string
    {
        return (string) $this->value();
    }

    public function subtract(FloatValueObject $amount): self
    {
        return new static($this->round($this->value() - $amount->value()));
    }

    public function add(FloatValueObject $amount)
    {
        return new static($this->round($this->value() + $amount->value()));
    }

    public function multiply(FloatValueObject $amount): self
    {
        return new static($this->round($this->value() * $amount->value()));
    }

    public function divide(FloatValueObject $amount): self
    {
        return new static($this->round($this->value() / $amount->value()));
    }

    private function round($number): float
    {
        return (float) round($number, 4);
    }
}
