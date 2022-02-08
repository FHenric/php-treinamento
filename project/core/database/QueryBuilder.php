<?php

class QueryBuilder{

    protected $pdo;

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;

    }

    public function selectAll($table) 
    {
        
        //prepare serve para pegar ou preparar os dados para dentro de uma variavel
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    //fetch vai mostrar esse resultado que foi preparado e executado
    //O que está dentro do fetchAll "PDO::FETCH_OBJ" serve para enxugar o resultado e mostrar somente em formato de array associativo
    return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $columns)
    {
        //nosso prepare() vai ser o seguinte: 'insert into <table> (<column1>, <column2>) values (<column1Value>, <column2Value> )
             //ex: prepare(' insert into users (name) values (filipe) ')
            //ex2: prepare(' insert into todos (description, completed) values ('go to store', 0) ') 

        //sprintf() é uma função onde recebe uma string no primeiro parametro e umas outras coisas/string nos parametros seguintes
        // a ideia é usar ela pra inserir valores dentro da string, uma alternativa de concatenação só que usando '%'
       
        $sql = sprintf(
           'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($columns)),
            ':'.implode(', :', array_keys($columns))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($columns);
        } catch (Exception $e) {
            die('Tu botou alguma coisa errada ai, volta lá e arruma, burro, burro, burro, burro');
        }

        // die(var_dump($sql));
    }
}