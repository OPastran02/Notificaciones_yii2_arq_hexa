<?php

declare(strict_types=1);

namespace api\Core\Ruido\Ruido\Infrastructure\Controller\Api\Write;

use api\Core\Ruido\Ruido\Domain\Repository\IRuidoWriteRepository;
use api\Core\Ruido\Ruido\Application\Command\CreateRuido;

use api\Core\Ruido\Ruido\Infrastructure\Persistence\ActiveRecord\RuidoRepositoryActiveRecord;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Ramsey\Uuid\Uuid;
use yii\helpers\Json;
use yii\web\Response;
use Yii;
class CreateRuidoController
{

   private CreateRuido $handler;

   public function __construct(CreateRuido $handler, IRuidoWriteRepository $repository)
   {
       $this->handler = $handler;
       $this->repository = $repository;
   }

   public function __invoke()
   {
       $obj = ($this->handler)();
       Yii::$app->response->format = Response::FORMAT_JSON;
       Yii::$app->response->data = $obj->toPrimitives();
       return Yii::$app->response;
   }

}

