<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \Bramus\Router\Router();
$app->setNamespace('\Ben\StructureYourPhpProject');


$app->get('/', 'HomeController@index');
$app->get('/home', 'HomeController@home');


$app->run();
