<?php

namespace Source\Core;

class Controller
{
    protected $view;
    protected $seo;

    public function __construct(string $pathToViews = null)
    {
        $this->view = new View($pathToViews);
        //$this->seo = new Seo();
    }
}