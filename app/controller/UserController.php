<?php

namespace UserController;

use controller\Controller;

class UserController extends Controller
{
    public function index()
    {
        $this->loadView('user/index.php', 'user_index');
    }
    public function create()
    {
        $this->loadView('user/create.php','user_create');
    }
    public function store()
    {

    }
}