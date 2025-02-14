<?php

$path = 'content/';
$ext = '.php';

$routes = [
    '/' => 'main',
    '/author' => 'author',
    '/tz' => 'tz'
];

if (!empty($_SERVER['REQUEST_URI'])) {
    $route = $routes[$_SERVER['REQUEST_URI']] ?? '404';
}else{
    $route = 'main';
}

$includePath = $path . $route . $ext;

include $includePath;