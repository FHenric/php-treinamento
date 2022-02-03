<?php

require 'functions.php';

class Task {

    //protected serve pra deixar essas variaveis invisiveis fora da classe, ou seja não da pra ver 
    public $description;
    
    public $completed = false;

    public function __construct($description) {   
        // é  ativado automaticamente quando usamos a Classe
        $this->description = $description;

    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }
}

$tasks = [
    new Task('Arrumar a impressora'),
    new Task('Imprimir os documentos'),
    new Task('Atualizar o sistema'),
    new Task('Formatar o pc da tia cotinha')
];

//chama a função especifica da classe
$tasks[0]->complete();

//mostra na tela a chamada da função especifica
// dd($tasks);

require 'class.view.php'
?>