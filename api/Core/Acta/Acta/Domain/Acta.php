<?php
declare(strict_types=1);

use Yii;

namespace api\Core\Acta\Acta\Domain;

use api\Core\Acta\Acta\Domain\ValueObject\{
    Serie,
    Numero,
    Fechacreado,
    Fechamodificado,
    Numerogedoformulario,
    Fechadecreaciongedoformulario,
    Numeroactagedoformulario,
}

use api\Shared\Domain\ValueObject\{
    UUID,
    NID,
};

class Acta extends AggregateRoot
{

    public function __construct(
        private UUID $id,
        private UUID $id_inspeccion,
        private UUID $estado_id,
        private Serie $Serie,
        private Numero $Numero,
        private Fechacreado $Fecha_Creado,
        private UUID $Id_Usuario_Creador,
        private Fechamodificado $Fecha_Modificado,
        private UUID $Id_Usuario_Modificador,
        private Numerogedoformulario $NumeroGedoFormulario,
        private Fechadecreaciongedoformulario $FechaDeCreacionGedoFormulario,
        private Numeroactagedoformulario $NumeroActaGedoFormulario,
        private Actaasignacions $actaAsignacions,
        private Actautilizada $actaUtilizada,
    )
    {}

    public static function create(
        UUID $id,
        UUID $id_inspeccion,
        UUID $estado_id,
        Serie $Serie,
        Numero $Numero,
        Fechacreado $Fecha_Creado,
        UUID $Id_Usuario_Creador,
        Fechamodificado $Fecha_Modificado,
        UUID $Id_Usuario_Modificador,
        Numerogedoformulario $NumeroGedoFormulario,
        Fechadecreaciongedoformulario $FechaDeCreacionGedoFormulario,
        Numeroactagedoformulario $NumeroActaGedoFormulario,
        Actaasignacions $actaAsignacions,
        Actautilizada $actaUtilizada
    ): self 
    {
        return new self(
            $id,
            $id_inspeccion,
            $estado_id,
            $Serie,
            $Numero,
            $Fecha_Creado,
            $Id_Usuario_Creador,
            $Fecha_Modificado,
            $Id_Usuario_Modificador,
            $NumeroGedoFormulario,
            $FechaDeCreacionGedoFormulario,
            $NumeroActaGedoFormulario,
            $actaAsignacions,
            $actaUtilizada
        );
    }


    public static function fromPrimitives(
        int $id,
        int $id_inspeccion,
        int $estado_id,
        string $Serie,
        int $Numero,
        string $Fecha_Creado,
        int $Id_Usuario_Creador,
        string $Fecha_Modificado,
        int $Id_Usuario_Modificador,
        string $NumeroGedoFormulario,
        string $FechaDeCreacionGedoFormulario,
        string $NumeroActaGedoFormulario,
        ActaAsignacion $actaAsignacions,
        ActaUtilizada $actaUtilizada
    ): self 
    {
        return new self(
            new UUID($id),
            new UUID($id_inspeccion),
            new UUID($estado_id),
            new Serie($Serie),
            new Numero($Numero),
            new Fechacreado($Fecha_Creado),
            new UUID($Id_Usuario_Creador),
            new Fechamodificado($Fecha_Modificado),
            new UUID($Id_Usuario_Modificador),
            new Numerogedoformulario($NumeroGedoFormulario),
            new Fechadecreaciongedoformulario($FechaDeCreacionGedoFormulario),
            new Numeroactagedoformulario($NumeroActaGedoFormulario),
            new Actaasignacions($actaAsignacions),
            new Actautilizada($actaUtilizada)
        );
    }

}