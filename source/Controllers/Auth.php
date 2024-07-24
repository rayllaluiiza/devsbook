<?php

namespace Source\Controllers;

use Source\Core\Controller;

class Auth extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ ."/../../themes/" . $_ENV['CONF_VIEW_THEME'] ."/");
    }

    public function login()
    {
        echo $this->view->render("login", []);
    }

    public function cadastrar()
    {
        echo $this->view->render("cadastrar", []);
    }

    public function error(array $data)
    {
        echo 'haha';
        var_dump($data);
    }
}