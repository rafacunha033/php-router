<?php

namespace App;

class Router 
{
    /** @var array */
    protected array $routes;

    public function __construct()
    {}

    /** @param array $controller */
    public $controller;
    protected function addRoute($method, $uri, $controller,  $separator = ':')
    {
        $controllerName = explode($separator, $controller);
        

        $this->routes[$method][] = [
            'uri'    => $uri,
            'controller' => $controller,
            'controllerName' => $controllerName
        ];
    }

    public function get($uri, $controller)
    {
        $this->addRoute("GET", $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->addRoute("POST", $uri, $controller);
    }

    public function routes()
    {
        return $this->routes;
    }
}
