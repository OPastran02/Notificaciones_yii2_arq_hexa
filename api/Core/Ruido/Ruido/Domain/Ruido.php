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
use Core\SharedKernelEntity\User\Domain\UserId;

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
    private UserId $createdById;
    private DateTimeValueObject $createdDate;
    private UserId $modifyById;
    private DateTimeValueObject $modifyDate;
    private DateTimeValueObject $isActive;

    public function __construct(RuidoBuilder $builder)
    {
        $this->id                      =  $builder->id();           
        $this->asae                    =  $builder->asae();             
        $this->ambiente                =  $builder->ambiente();                 
        $this->periodo                 =  $builder->periodo();                
        $this->asa                     =  $builder->asa();            
        $this->recinto                 =  $builder->recinto();                
        $this->usoPredominante         =  $builder->usoPredominante();                        
        $this->lmp                     =  $builder->lmp();            
        $this->correccion              =  $builder->correccion();                   
        $this->createdById             =  $builder->createdById();                    
        $this->createdDate             =  $builder->createdDate();                    
        $this->modifyById              =  $builder->modifyById();                   
        $this->modifyDate              =  $builder->modifyDate();                   
        $this->isActive                =  $builder->isActive();  
    }

    public static function create(
               
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