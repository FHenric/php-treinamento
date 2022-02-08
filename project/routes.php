<?php 

$router -> get('Estudos/PHP/project','controllers/index.php');
$router -> get('Estudos/PHP/project/index.php/about','controllers/about.php');
$router -> get('Estudos/PHP/project/index.php/about/culture','controllers/about-culture.php');

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