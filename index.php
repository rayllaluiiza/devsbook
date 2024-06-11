<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;
use Source\Helpers\Geral;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$route = new Router(Geral::url());

ob_end_flush();