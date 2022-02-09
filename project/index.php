<?php
//esse autoload funciona depois de criar o composer.json e configurar o autoload la dentro
//para mapear as classes e fazer o 'require' delas automaticamente
require 'vendor/autoload.php';
//agora é só remover os requires de dentro do bootstrap e está pronto seu autoload sem ficar componto
//diversos requires das classes no codigo

$database = require 'core/bootstrap.php';
// die(var_dump(trim($_SERVER['REQUEST_URI'], '/')));

Router::load('routes.php')

    ->direct(Request::uri(), Request::method());
