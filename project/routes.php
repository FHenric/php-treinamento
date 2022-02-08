<?php 

$router -> get('Estudos/PHP/project','PagesController@home');
$router -> get('Estudos/PHP/project/index.php/about','PagesController@about');
$router -> get('Estudos/PHP/project/index.php/about/culture','PagesController@contact');

$router -> post('Estudos/PHP/project/index.php/names', 'controllers/add-name.php');

// die(var_dump($router->routes['GET']));

// $router -> define([
//     'Estudos/PHP/project' => 'controllers/index.php',
//     'Estudos/PHP/project/index.php' => 'controllers/index.php',
//     'Estudos/PHP/project/index.php/about' => 'controllers/about.php',
//     'Estudos/PHP/project/index.php/about/culture' => 'controllers/about-culture.php',
//     'Estudos/PHP/project/index.php/contact' => 'controllers/contact.php',
//     'Estudos/PHP/project/index.php/names' => 'controllers/add-name.php'
// ]);