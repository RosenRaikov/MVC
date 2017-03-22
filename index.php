<?php
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';
});


$uri = $_SERVER['REQUEST_URI'];
$self = explode('/', $_SERVER['PHP_SELF']);
array_pop($self);
$replace = implode('/', $self);
$uri = str_replace($replace.'/', "", $uri);
$params = explode('/', $uri);
//array_shift($params);
$controllerName = array_shift($params);
$actionName = array_shift($params);

$controllerFullName = "Controllers\\" . ucfirst($controllerName);
$controller = new $controllerFullName;
call_user_func_array([$controller, $actionName], $params);

