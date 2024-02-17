<?php

declare(strict_types=1);

namespace Core\Shared\Domain\ValueObject;

use Core\Shared\Domain\Error;
use \DateTimeImmutable;

class NullableDateTimeValueObject
{
    protected ?DateTimeImmutable $value;

    public function __construct(?DateTimeImmutable $value)
    {
        $this->value = $value;
    }

    public function value(): ?DateTimeImmutable
    {
        return $this->value;
    }

    public function asString(string $format = 'Y-m-d'): string
    {
        return $this->value instanceof DateTimeImmutable ? $this->value->format($format) : '';
    }

    public function asTimestamp(): ?int
    {
        return $this->value instanceof DateTimeImmutable ? $this->value->getTimestamp() : null;
    }

    public static function fromTimestamp(?int $timestamp): self
    {
        if(empty($timestamp)){
            return new static(null);
        }

        $dateTime = new DateTimeImmutable("@{$timestamp}");

        if(! $dateTime instanceof DateTimeImmutable){
            throw new Error(sprintf('Cannot convert <%s> to date', $timestamp));
        }
        return new static($dateTime);
    }

    public static function fromString(?string $date, string $format = 'Y-m-d'): self
    {
        if(empty($date) || $date == '0000-00-00 00:00:00'){
            return new static(null);
        }

        $dateTime = DateTimeImmutable::createFromFormat($format, $date);

        if(! $dateTime instanceof DateTimeImmutable){
            throw (new Error())->withPersonalizedMessage(sprintf('Cannot convert <%s> to date. Expected format <%s>', $date, $format));
        }
        return new static($dateTime);
    }

    public function __toString(): ?string
    {
        return $this->value instanceof DateTimeImmutable ? (string)$this->value()->getTimestamp() : '';
    }

    public static function now(): self
    {
        return new static(new DateTimeImmutable);
    }
}