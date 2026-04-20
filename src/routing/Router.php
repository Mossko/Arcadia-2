<?php

namespace App\routing;

class Router
{
    private $routes;
    public function __construct()
    {
        $this->routes = require_once APP_ROOT . "/config/routes.php";
    }

    public function handleRequest(string $uri)
    {
        $path = $this->normalizePath($uri);
        $route = $this->routes[$path];

        $controllerPath = $route["controller"];
        $action = $route["action"];

        $controller = new $controllerPath();
        $controller->$action();
    }

    public static function normalizePath(string $uri)
    {
        $path = parse_url($uri, PHP_URL_PATH);
        $path = rtrim($path, "/") . "/";
        return $path;
    }
}
