<?php 

include('vendor/autoload.php');

use App\Router;

class Controller 
{

    public function index()
    {
        echo 'hi';
    }

    public function home()
    {

    }

    public function show()
    {
        
    }
}

$router = new Router();
$router->get('/', 'Controller:index');
$router->get('/user', 'Controller:home');
$router->post('/user', 'Controller:show');

echo "<pre>";
print_r($router->routes());
echo "</pre>";