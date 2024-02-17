<?php
declare(strict_types=1);

namespace Core\Shared\Domain\ValueObject;


use Core\Shared\Domain\Error;
use \DateTimeImmutable;

class DateTimeValueObject
{
    protected DateTimeImmutable $value;

    public const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public function __construct(DateTimeImmutable $value)
    {
        $this->value = $value;
    }

    public function value(): DateTimeImmutable
    {
        return $this->value;
    }

    public function asString(string $format = 'Y-m-d'): string
    {
        return $this->value->format($format);
    }

    public function asTimestamp(): int
    {
        return $this->value->getTimestamp();
    }

    public static function now(): self
    {
        return new static(new DateTimeImmutable);
    }

    public static function fromString(string $date, string $format = 'Y-m-d'): self
    {
        $dateTime = DateTimeImmutable::createFromFormat($format, $date);

        if(! $dateTime instanceof DateTimeImmutable){
            throw (new Error())->withPersonalizedMessage(sprintf('Cannot convert <%s> to date', $date));
        }
        return new static($dateTime);
    }

    public static function fromUnixTime(int $time)
    {
        $dateTime = new DateTimeImmutable("@{$time}");

        if(! $dateTime instanceof DateTimeImmutable){
            throw (new Error())->withPersonalizedMessage(sprintf('Invalid unix time for <%s>', $time));
        }
        return new static($dateTime);
    }


    public function __toString(): string
    {
        return (string) $this->value()->getTimestamp();
    }
}
