<?php
declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain;

use Core\Shared\Domain\Aggregate\AggregatorBuilder;
use Core\Shared\Domain\ValueObject\BooleanValueObject;
use Core\Shared\Domain\ValueObject\DateTimeValueObject;
use Core\Shared\Domain\ValueObject\EmptyIdValueObject;
use Core\Shared\Domain\ValueObject\FloatValueObject;
use Core\Shared\Domain\ValueObject\IdValueObject;
use Core\Shared\Domain\ValueObject\IntValueObject;
use Core\Shared\Domain\ValueObject\StringValueObject;
use Core\SharedKernelEntity\User\Domain\UserId;


final class RuidoBuilder extends AggregatorBuilder
{

    private IdValueObject $id;
    private IdValueObject $asae;
    private IdValueObject $ambiente;
    private IdValueObject $periodo;
    private IdValueObject $asa;
    private IdValueObject $recinto;
    private IdValueObject $usoPredominante;
    private IntValueObject $lmp;
    private IntValueObject $correccion;
    private UserId $createdById;
    private ?DateTimeValueObject $createdDate;
    private ?UserId $modifyById;
    private ?DateTimeValueObject $modifyDate;
    private BooleanValueObject $isActive;

    public function build(): Ruido
    {
        return new Ruido($this);
    }

    public function fromPrimitives(array $primitives): self
    {
        $this->setPrimitives($primitives);

        $this->id                                   = IdValueObject::fromPrimitives($primitives["id"]);
        $this->asae                                 = IdValueObject::fromPrimitives($primitives["asae"]);
        $this->ambiente                             = IdValueObject::fromPrimitives($primitives["ambiente"]);
        $this->periodo                              = IdValueObject::fromPrimitives($primitives["periodo"]);
        $this->asa                                  = IdValueObject::fromPrimitives($primitives["asa"]);
        $this->recinto                              = IdValueObject::fromPrimitives($primitives["recinto"]);
        $this->usoPredominante                      = IdValueObject::fromPrimitives($primitives["usoPredominante"]);
        $this->lmp                                  = IdValueObject::fromPrimitives($primitives["asalmpe"]);
        $this->correccion                           = IdValueObject::fromPrimitives($primitives["correccion"]);
        $this->createdById                          = UserId::fromPrimitives($primitives["createdById"]);
		$this->createdDate                          = $primitives["createdDate"] ? DateTimeValueObject::fromString($primitives["createdDate"], 'Y-m-d H:i:s') : null;
		$this->modifyById                           = $primitives["modifyById"] ? UserId::fromPrimitives($primitives["modifyById"]) : null;
		$this->modifyDate                           = $primitives["modifyDate"] ? DateTimeValueObject::fromString($primitives["modifyDate"],'Y-m-d H:i:s') : null;
		$this->isActive                             = BooleanValueObject::fromPrimitives($primitives["isActive"]);

        return $this;
    }

    public function create(array $primitives, $userId): self
    {
        $this->setPrimitives($primitives);

        $this->id                                   = $this->good('id', $primitives) ? new IdValueObject($primitives['id']) : new EmptyIdValueObject();
        $this->asae                                 = new IdValueObject($primitives['asae']);
        $this->ambiente                             = new IdValueObject($primitives['ambiente']);
        $this->periodo                              = new IdValueObject($primitives['periodo']);
        $this->asa                                  = new IdValueObject($primitives['asa']);
        $this->recinto                              = new IdValueObject($primitives['recinto']);
        $this->usoPredominante                      = new IdValueObject($primitives['usoPredominante']);
        $this->lmp                                  = new IdValueObject($primitives['lmp']);
        $this->correccion                           = new IdValueObject($primitives['usoPredocorreccionminante']);
        $this->createdById                          = new UserId($userId);
        $this->createdDate                          = DateTimeValueObject::now();
        $this->modifyById                           = $this->primitiveOrNull('modifyById') ? new UserId($primitives['modifyById']) : null;
		$this->modifyDate                           = $primitives["modifyDate"] ? DateTimeValueObject::fromString($primitives["modifyDate"],'Y-m-d H:i:s') : null;
		$this->isActive                             = new BooleanValueObject((bool) $this->primitiveOrNull('isCompleted'));

        return $this;
    }

    public function update(array $data, Ruido $ruido, $userId): self
    {
        $primitives = $ruido->toPrimitives();
        $this->fromPrimitives($primitives);
        $this->setPrimitives($data);
        $primitives = $data;

        $this->asae                                 = new IdValueObject($primitives['asae']);
        $this->ambiente                             = new IdValueObject($primitives['ambiente']);
        $this->periodo                              = new IdValueObject($primitives['periodo']);
        $this->asa                                  = new IdValueObject($primitives['asa']);
        $this->recinto                              = new IdValueObject($primitives['recinto']);
        $this->usoPredominante                      = new IdValueObject($primitives['usoPredominante']);
        $this->lmp                                  = new IdValueObject($primitives['lmp']);
        $this->correccion                           = new IdValueObject($primitives['usoPredocorreccionminante']);
        $this->modifyById                           = new UserId($userId);
		$this->modifyDate                           = DateTimeValueObject::now();
		$this->isActive                             = new BooleanValueObject((bool) $this->primitiveOrNull('isCompleted'));

        return $this;
    }

    public function id() : IdValueObject
    {
        return $this->id;
    }

    public function asae() : IdValueObject
    {
        return $this->asae;
    }

    public function ambiente() : IdValueObject
    {
        return $this->ambiente;
    }

    public function periodo() : IdValueObject
    {
        return $this->periodo;
    }

    public function asa() : IdValueObject
    {
        return $this->asa;
    }

    public function recinto() : IdValueObject
    {
        return $this->recinto;
    }

    public function usoPredominante() : IdValueObject
    {
        return $this->usoPredominante;
    }

    public function lmp() : IdValueObject
    {
        return $this->lmp;
    }

    public function correccion() : IdValueObject
    {
        return $this->correccion;
    }

    public function createdById() : UserId
    {
        return $this->createdById;
    }

    public function createdDate() : ?DateTimeValueObject
    {
        return $this->createdDate;
    }

    public function modifyById() : ?UserId
    {
        return $this->modifyById;
    }

    public function modifyDate() : ?DateTimeValueObject
    {
        return $this->modifyDate;
    }

    public function isActive() : BooleanValueObject
    {
        return $this->isActive;
    }
}