<?php

namespace Source\Core;

use League\Plates\Engine;

class View
{
    private $engine; 

    public function __construct(string $path, string $ext = 'php')
    {
        $this->engine = new Engine($path, $ext);
    }

    public function path(string $name, string $path): View
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    public function render($templateName, array $data): string
    {
        return $this->engine->render($templateName, $data);
    }

    public function engine(): Engine
    {
        return $this->engine();
    }
}