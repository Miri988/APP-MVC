<?php

namespace App\Mvc\Controller\WEB;
use App\Mvc\Model\User;
use App\Mvc\Component\View;

class UsersController
{
    public function actionUsers()
    {
        echo 'Привет, это страница с пользователями';
        $users = User::getAll();
        View::build(
            'main',
            'users',
            [
                'users' => $users,
            ]
        );
    }
    public function actionView()
    {
        echo 'Привет. Это View';
    }
    public function actionCreate()
    {

    }

}