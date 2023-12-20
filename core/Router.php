<?php

class Router
{

    private $controller = 'App\Controller\EquipController';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $this->parseUri();
    }

    public function parseUri()
    {
        $uri = $_GET['uri'] ?? '';
        $uri = explode('/', trim(strtolower($uri), '/'));

        if (!empty($uri[0])) {

            $controller = $uri[0] . 'Controller';
            unset($uri[0]);
            $controller = 'App\Controller\\' . $controller;

            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                echo "error not fined";
                exit;
            }
        }

        $class = $this->controller;
        $class = new $class;


        if (isset($uri[1])) {

            $method = $uri[1];
            unset($uri[1]);

            if (method_exists($class, $method)) {
                $this->method = $method;
            } else {
                echo "error not fined";
                exit;
            }
        }


        if (isset($uri[2])) {
            $this->params = array_values($uri);
        }

        call_user_func_array([$class, $this->method], $this->params);
    }
}
