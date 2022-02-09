<?php 

$router -> get('Estudos/PHP/project','PagesController@home');
$router -> get('Estudos/PHP/project/index.php/about','PagesController@about');
$router -> get('Estudos/PHP/project/index.php/contact','PagesController@contact');

$router -> get('Estudos/PHP/project/index.php/users','UsersController@index');
$router -> post('Estudos/PHP/project/index.php/users', 'UsersController@store');

// die(var_dump($router->routes['GET']));
