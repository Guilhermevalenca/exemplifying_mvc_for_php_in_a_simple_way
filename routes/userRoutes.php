<?php

use UserController\UserController;


if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $userController = new UserController();

    if(count($route) !== 2) {

        if($route[2] === 'create') {
            $userController->create();
        }

    } else {
        $userController->index();
    }

} else if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userController = new UserController();

    if($route[2] === 'create') {
        $userController->store();
    }

}
