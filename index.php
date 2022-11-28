<?php
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once "app/NewsApiRequest.php";

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $route) {
    $route->addRoute('GET', '/', ['App\Controllers\NewsController', 'index']);
    $route->addRoute('GET', '/section', ['App\Controllers\NewsController', 'section']);
    $route->addRoute('GET', '/search', ['App\Controllers\NewsController', 'search']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        [$controller, $method] = $handler;
        $response = (new $controller)->{$method}();
        //var_dump($response);
        // C R U D
        break;
}
?>





