<?php


use App\Router\Router;

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();


$router = new Router();

$provider =new \App\Provider\Controller\ControllerProvider();
$controller = $provider->provide(\Controller\WelcomeController::class);

$controller->welcome();