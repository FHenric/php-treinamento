<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function connectToDB(){

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'mytodo';

    //Primeiro erro absurdo encontrado, o projeto precisa ser rodado dentro da pasta do XAMPP e acessado pelo url localhost
    try{
        return $pdo = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
    } catch(PDOException $e) {
        echo 'Could not connect.';
    }
}

function fetchAllTasks($pdo) {
    //prepare serve para pegar ou preparar os dados para dentro de uma variavel
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    //fetch vai mostrar esse resultado que foi preparado e executado
    //O que está dentro do fetchAll "PDO::FETCH_OBJ" serve para enxugar o resultado e mostrar somente em formato de array associativo
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}