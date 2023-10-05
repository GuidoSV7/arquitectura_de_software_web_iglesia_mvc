<?php

namespace Lib;

class Route
{
    private static $routes = [];

    public static function get($uri, $callback)
    {
        self::$routes['GET'][$uri] = $callback;
    }

    public static function post($uri, $callback)
    {
        self::$routes['POST'][$uri] = $callback;
    }

    public static function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$method] as $route => $callback) {
            $route = str_replace('/', '\/', $route); // Escapar las barras en la ruta

            // Reemplazar los parámetros dinámicos en la ruta
            $route = preg_replace_callback('/:[a-zA-Z]+/', function ($match) {
                return '([0-9]+)';
            }, $route);

            // Agregar delimitadores y anclaje de inicio y final
            $pattern = "/^" . $route . "$/";

            if (preg_match($pattern, $uri, $matches)) {
                $params = array_slice($matches, 1);

                if (is_callable($callback)) {
                    $response = $callback(...$params);
                }

                if (is_array($callback)) {
                    $controller = new $callback[0];
                    $response = $controller->{$callback[1]}(...$params);
                }

                if (is_array($response) || is_object($response)) {
                    header('Content-Type: application/json');
                    echo json_encode($response);
                } else {
                    echo $response;
                }

                return;
            }
        }
    }
}
