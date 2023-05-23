<?php 

include('vendor/autoload.php');

class Router 
{
    /** @var array */
    protected array $routes;

    public function __construct()
    {}

    public function addRoute($method, $uri)
    {
        $this->routes[] = [
            'method' => $method,
            'uri'    => $uri
        ];
    }

    public function routes()
    {
        return $this->routes;
    }
}

$router = new Router();
$router->addRoute("GET", "/");

echo "<pre>";
    var_dump($router->routes());
echo "</pre>";