<?php

class QueryBuilder{

    protected $pdo;

    public function __construct(PDO $pdo){

        $this->pdo = $pdo;

    }

    public function selectAll($table) {
        
        //prepare serve para pegar ou preparar os dados para dentro de uma variavel
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    //fetch vai mostrar esse resultado que foi preparado e executado
    //O que está dentro do fetchAll "PDO::FETCH_OBJ" serve para enxugar o resultado e mostrar somente em formato de array associativo
    return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}