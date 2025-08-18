<?php
class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        if ($uri === '') $uri = '/';
        $action = $this->routes[$method][$uri] ?? null;
        if ($action) {
            list($controller, $method) = explode('@', $action);
            require_once __DIR__ . "/Controllers/{$controller}.php";
            $controller = new $controller();
            echo $controller->$method();
        } else {
            http_response_code(404);
            echo '404 Not Found';
        }
    }
}
