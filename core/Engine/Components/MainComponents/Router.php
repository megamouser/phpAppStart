<?php
namespace Core\Engine\Components\MainComponents;

class Router 
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller)
    {
        return $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        return $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if(!array_key_exists($uri, $this->routes[$requestType]))
        {
            die('No route defined for this URI: ' . $uri);
        }

        return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
    }

    protected function callAction($controller, $action)
    {
        $controller = "Core\\App\\Controllers\\$controller";
        $controller = new $controller;
        
        if(!method_exists($controller, $action))
        {
            die("Controller does not respond the $action action");
        }

        return $controller->$action();
    }
}