<?php
declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain;

use Core\Shared\Domain\ValueObject\BooleanValueObject;
use Core\Shared\Domain\ValueObject\DateTimeValueObject;
use Core\Shared\Domain\ValueObject\EmptyIdValueObject;
use Core\Shared\Domain\ValueObject\FloatValueObject;
use Core\Shared\Domain\ValueObject\IdValueObject;
use Core\Shared\Domain\ValueObject\IntValueObject;
use Core\Shared\Domain\ValueObject\StringValueObject;

final class Ruido extends AggregateRoot
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
    private IdValueObject $createdById;
    private DateTimeValueObject $createdDate;
    private IntValueObject $modifyById;
    private DateTimeValueObject $modifyDate;
    private DateTimeValueObject $isActive;

    public function __construct(RuidoBuilder $builder)
    {}

    public static function create(
        UUID $idRuidos,
        Asae $ASAE,
        Ambiente $Ambiente,
        Periodo $Periodo,
        Asa $ASA,
        Recinto $Recinto,
        Usopredominante $Uso_predominante,
        Lmp $LMP,
        Correccion $Correccion
    ): self 
    {
        return new self(
            $idRuidos,
            $ASAE,
            $Ambiente,
            $Periodo,
            $ASA,
            $Recinto,
            $Uso_predominante,
            $LMP,
            $Correccion
        );
    }


    public static function fromPrimitives(
        int $idRuidos,
        int $ASAE,
        int $Ambiente,
        int $Periodo,
        int $ASA,
        int $Recinto,
        int $Uso_predominante,
        int $LMP,
        int $Correccion
    ): self 
    {
        return new self(
            new UUID($idRuidos),
            new Asae($ASAE),
            new Ambiente($Ambiente),
            new Periodo($Periodo),
            new Asa($ASA),
            new Recinto($Recinto),
            new Usopredominante($Uso_predominante),
            new Lmp($LMP),
            new Correccion($Correccion)
        );
    }


    public function toPrimitives(): array
    {
        return [
            'idRuidos' => $this->idRuidos->value(),
            'ASAE' => $this->ASAE->value(),
            'Ambiente' => $this->Ambiente->value(),
            'Periodo' => $this->Periodo->value(),
            'ASA' => $this->ASA->value(),
            'Recinto' => $this->Recinto->value(),
            'Uso_predominante' => $this->Uso_predominante->value(),
            'LMP' => $this->LMP->value(),
            'Correccion' => $this->Correccion->value(),
        ];
    }
}