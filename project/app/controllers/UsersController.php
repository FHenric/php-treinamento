<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store()
    {
        //Inserir o usuario associado com a requisição
        
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);
        
        //redirencionar para a pagina inicial
        return redirect('Estudos/PHP/project/index.php/users');
        //header('Location: /Estudos/PHP/project/index.php/users');
    }
}
