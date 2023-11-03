<?php

namespace controller;

use Cassandra\Function_;

class Controller
{
    private $basePath = 'app/view/';

    protected function loadView($relativePath, $view, $data = null)
    {
        require $this->basePath . $relativePath;
        echo $data === null ? call_user_func($view) : call_user_func($view, $data);
    }
}