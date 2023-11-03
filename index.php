<?php
    require 'global_init.php';

    $url = $_SERVER['REQUEST_URI'] ?: $_SERVER['PATH_INFO'];
    $route = explode('/',$url);

    if($route[1] === "") {

        require 'app/view/welcome.php';

    } else if($route[1] === 'user') {

        require 'routes/userRoutes.php';

    } else if($route[1] === 'todo') {

        echo 'todo';

    }
