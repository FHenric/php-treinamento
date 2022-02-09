<?php 

namespace App\Core;
class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        
        $router = new static;

        require $file;

        return $router;

    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        
        if (array_key_exists($uri, $this->routes[$requestType])){

            //explode(caracter ou parte da string, string por si só) ele vai pegar um caracter no parametro e formar uma string contendo nos seus elementos o que vier antes e o que vier depois desse caracter passado por parametro

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );

        }
        // throw new Exception('Rota não encontrada!');

    }

    protected function callAction($controller, $action)
    {   
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;
        
        //esse action é o que tá depois do @ no nosso routes.php
        // if(! method_exists($controller, $action)){
        //     throw new Exception("{$controller} does not respond to de {$action}");
            
        // }

        return $controller->$action();
    }

}