<?php

namespace App\Mvc\Controller\Api;

use App\Mvc\Model\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UsersController
{
    public function actionIndex()
    {
        $users = User::getAll(false);

        $response = new JsonResponse($users);

        $response->send();
    }

    public function actionCreate()
    {
        $request = Request::createFromGlobals();
        $data = $request->toArray();

        if (empty($data['name']) || empty($data['surname']) || empty($data['password'])) {
            $errorResponse = new JsonResponse(['message' => 'Ты ввел недостаточно данных!']);
            $errorResponse->setStatusCode(JsonResponse::HTTP_BAD_REQUEST);

            $errorResponse->send();

            return;
        }

        User::create($data);

        $response = new JsonResponse(['message' => 'Создан новый пользователь']);
        $response->setStatusCode(JsonResponse::HTTP_CREATED); // Ответ с кодом 201 (успешно создали ресурс)

        $response->send();
    }
}
