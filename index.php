<?php 

include('vendor/autoload.php');

class Router 
{
    /** @var array */
    protected array $routes;

    public function __construct()
    {}

    protected function addRoute($method, $uri)
    {
        $this->routes[$method][] = [
            'uri'    => $uri
        ];
    }

    public function get($uri)
    {
        $this->addRoute("GET", $uri);
    }

    public function post($uri)
    {
        $this->addRoute("POST", $uri);
    }

    public function routes()
    {
        return $this->routes;
    }
}

$router = new Router();
$router->get('/');
$router->get('/user');
$router->post('/user');

echo "<pre>";
print_r($router->routes());
echo "</pre>";