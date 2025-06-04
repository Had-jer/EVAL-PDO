<?php

use App\Entity\Connexion;
use Dotenv\Dotenv;

require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv::createImmutable('..');
$dotenv->load();

$connection = new Connexion();
$connection->connect();
var_dump($connection);
