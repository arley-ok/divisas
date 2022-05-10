<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/divisas', 'DivisaController@principal');

$router->get('/divisas/{divisa}', 'DivisaController@secundaria');



