<?php
//a classe App serve como container para bindar qualquer "container" de informações no array de forma mais adequada e POO
App::bind('config', require 'config.php');

//através da classe QueryBuilder, podemos criar novas requisiçoes tornando o codigo mais enxuto.
//alem de permitir criar funções especificas dentro do querybuilder para chamar ou manipular os dados
App::bind('database', new QueryBuilder(

    //por ser static não precisamos fazer um new Connection e chamar a função dentro desse conection criado, 
    //podemos simplesmente fazer isso:
    Connection::make(App::get('config')['database'])

));

function view($name, $data = [])
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}