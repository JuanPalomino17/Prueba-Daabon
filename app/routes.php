<?php

// Ruta para obtener los datos
$router->get('/data', 'DataController@index');
class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];

            if (is_callable($callback)) {
                call_user_func($callback);
            } else {
                echo "Error: Invalid callback specified for route '$path'.";
            }
        } else {
            echo "Error: Route '$path' not found.";
        }
    }
}
