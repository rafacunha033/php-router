<?php

use PHPUnit\Framework\TestCase;

use App\Router;

final class RouterTest extends TestCase
{
    public function testGetIsValidHttpMethod()
    {
        $httpMethod = 'GET';
        $router = new Router();
        
        $this->assertTrue($router->isValidHttpMethod($httpMethod));
    }

    public function testPostIsValidHttpMethod()
    {
        $httpMethod = 'POST';
        $router = new Router();
        
        $this->assertTrue($router->isValidHttpMethod($httpMethod));
    }

    public function testPutIsValidHttpMethod()
    {
        $httpMethod = 'PUT';
        $router = new Router();
        
        $this->assertTrue($router->isValidHttpMethod($httpMethod));
    }
}



