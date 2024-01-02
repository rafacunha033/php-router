<?php

namespace App;

use Exception;

class Router {
    /** @var array<string, array<string, mixed>> */
    protected array $routes = [];

    public function addRoute($httpMethod, $route, callable $controller)
    {
        if( !$this->isValidHttpMethod($httpMethod) ) {
            throw new Exception("$httpMethod is not a valid HTTP REQUEST METHOD!");
        }

        $this->routes[$httpMethod][$route] = $controller;
    }

    public function isValidHttpMethod(string $httpMethod) 
    {
        $regex = "#(get|GET|post|POST|put|PUT|delete|DELETE|patch|PATCH)$#";
        $availableMethodRegex = preg_match_all($regex, $httpMethod);

        if ( $availableMethodRegex ) {
            return true;
        }
        
        return false;
    }

    public function dispatch($httpMethod, $route)
    {        
        $path = parse_url($route, PHP_URL_PATH);
        $uri = substr($path, (strlen(BASE_URL))-1);
        
        if (isset($this->routes[$httpMethod][$uri])) {
            $controller = $this->routes[$httpMethod][$uri];

            return $controller;
        }

        throw new Exception("This path isn't registered!");
        // $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // $uri = substr($path, 0, strlen(BASE_URL));

        // if ( in_array($uri, $routes[$httpMethod, ]) ) {

        // }

    }

    public function getData()
    {
        return $this->routes;
    }
}


// $routes['get']['/users'] = function()