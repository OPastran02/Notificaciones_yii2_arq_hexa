<?php
declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Domain;

use api\Shared\Domain\ValueObject\{
    UUID,
    NID,
};

use api\Core\Ruido\Ruido\Domain\ValueObject\{
    Asae,
    Ambiente,
    Periodo,
    Asa,
    Recinto,
    Usopredominante,
    Lmp,
    Correccion,
};

class Ruido extends AggregateRoot
{

    public function __construct(
        private UUID $idRuidos,
        private Asae $ASAE,
        private Ambiente $Ambiente,
        private Periodo $Periodo,
        private Asa $ASA,
        private Recinto $Recinto,
        private Usopredominante $Uso_predominante,
        private Lmp $LMP,
        private Correccion $Correccion,
    )
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