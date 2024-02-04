<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Application;

use api\Core\Ruido\Ruido\Dommain\{
   Ruido,
   Repository\IRuidoReadRepository
};

use api\Core\Ruido\Ruido\Application\DTO\RuidoCreateDTO;
use Ramsey\Uuid\Uuid;

final class UpdateRuido
{

   public function __invoke(RuidoCreateDTO $RuidoDTO, IRuidoReadRepositor $repository)   {
       //$arr = [];
       //$arr['id'] = Uuid::uuid4()->toString();
       //$arr['nickname'] = $avatarDTO->nickname;
       //$arr['message'] = $avatarDTO->message;
       //return $repository->create($arr);
   }

}

