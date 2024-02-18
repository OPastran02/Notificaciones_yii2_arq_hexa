<?php
declare(strict_types=1);

namespace Core\Shared\Domain\Bus\Event;

use Core\Shared\Domain\ValueObject\IpAddress;
use Core\Shared\Domain\ValueObject\StringValueObject;
use Core\SharedKernelEntity\User\Domain\UserId;

final class EventMetadata
{
    private UserId              $userId;
    private IpAddress           $userIp;
    private StringValueObject   $reason;

    public function __construct(UserId $userId, IpAddress $userIp, StringValueObject $reason)
    {
        $this->userId       = $userId;
        $this->userIp       = $userIp;
        $this->reason       = $reason;
    }

    public static function withUserAndIp(UserId $userId, IpAddress $userIp): self
    {
        return new self(
            $userId,
            $userIp,
            StringValueObject::fromPrimitives('')
        );
    }

    public static function fromPrimitives(array $primitives): self
    {
        return new self(
            UserId::fromPrimitives($primitives['userId']),
            IpAddress::fromPrimitives($primitives['userIp']),
            StringValueObject::fromPrimitives($primitives['reason'])
        );
    }

    public function toPrimitives(): array
    {
        return [
            'userId'    => $this->userId->value(),
            'userIp'    => $this->userIp->value(),
            'reason'    => $this->reason->value()
        ];
    }

    public function userId(): UserId
    {
        return $this->userId;
    }

    public function userIp(): IpAddress
    {
        return $this->userIp;
    }

    public function reason(): StringValueObject
    {
        return $this->reason;
    }
}
