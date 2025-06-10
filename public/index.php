<?php

use App\Core\Router;
use App\Routes;
use App\Repository\Connexion;
use Dotenv\Dotenv;

require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv::createImmutable('..');
$dotenv->load();




$router  = new Router(Routes::defineRoutes());
$router->init();


