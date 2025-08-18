<?php
// Définition des routes
// Exemple :
// $router->get('/', 'HomeController@index');

require_once __DIR__ . '/../app/Router.php';

$router = new Router();

// Définir vos routes ici
// $router->get('/', 'HomeController@index');

$router->dispatch();
