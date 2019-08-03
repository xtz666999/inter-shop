<?php

class Router
{
    public $routes;

    public function __construct()
    {
        $this->routes = include '../config/routes.php';
        print_r($this->routes);
    }
}
