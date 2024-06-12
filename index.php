<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;
use Source\Helpers\Geral;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$route = new Router(Geral::url());

/**
 * WEB ROUTES
 */
$route->namespace("Source/Controllers");
$route->get("/", "Auth:login");
$route->get("/registrar", "Auth:register");


/**
 * ERROR ROUTES
 */
$route->namespace("Source/Controllers")->group("/ops");
$route->get("/{errcode}", "Auth:error");

 /**
 * ROUTE
 */
$route->dispatch();

 /**
 * ERROR REDIRECT
 */
if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();