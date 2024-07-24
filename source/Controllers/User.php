<?php

namespace Source\Controllers;

use Source\Core\Controller;

class User extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ ."/../../themes/" . $_ENV['CONF_VIEW_THEME'] ."/");
    }

    public function index()
    {
        echo $this->view->render("index", []);
    }

    public function perfil()
    {
        echo $this->view->render("perfil", []);
    }

    public function amigos()
    {
        echo $this->view->render("amigos", []);
    }

    public function fotos()
    {
        echo $this->view->render("fotos", []);
    }
}