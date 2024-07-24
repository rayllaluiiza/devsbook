<?php

namespace Source\Helpers;

class Geral{

    public static function url(?string $path = null): string
    {
        
        if(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
            if($path) {
                return $_ENV['CONF_URL_BASE'] . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
            }
            return $_ENV['CONF_URL_BASE'];
        }
    }

    public static function theme(?string $path = null): string
    {
        
        if(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
            if($path) {
                return $_ENV['CONF_URL_BASE'] . "/themes/" . $_ENV['CONF_VIEW_THEME'] .'/' . ($path[0] == "/" ? mb_substr($path, 1) : $path);
            }
            return $_ENV['CONF_URL_BASE'] . "/themes/" . $_ENV['CONF_VIEW_THEME'];
        }
    }
}