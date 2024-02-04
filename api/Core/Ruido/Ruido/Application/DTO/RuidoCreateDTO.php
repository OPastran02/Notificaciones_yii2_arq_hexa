<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Application\DTO;

class RuidoCreateDTO
{
  public int $idRuidos;
  public int $ASAE;
  public int $Ambiente;
  public int $Periodo;
  public int $ASA;
  public int $Recinto;
  public int $Uso_predominante;
  public int $LMP;
  public int $Correccion;

  public function __construct(
      int $idRuidos,
      int $ASAE,
      int $Ambiente,
      int $Periodo,
      int $ASA,
      int $Recinto,
      int $Uso_predominante,
      int $LMP,
      int $Correccion,
   )
   {
      $this->idRuidos = $idRuidos;
      $this->ASAE = $ASAE;
      $this->Ambiente = $Ambiente;
      $this->Periodo = $Periodo;
      $this->ASA = $ASA;
      $this->Recinto = $Recinto;
      $this->Uso_predominante = $Uso_predominante;
      $this->LMP = $LMP;
      $this->Correccion = $Correccion;
   }

}

