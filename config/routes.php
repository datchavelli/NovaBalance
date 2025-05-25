<?php

$router = new Framework\Router();

$router->add("/admin/{controller}/{action}", ["namespace" => "Admin"]);
$router->add("/{title}/{id:\d+}/{page:\d+}/", ["controller" => "home", "action" => "showPage"]);
// $router->add("NovaBalance/{controller}/{id:\d+}/{action}");
// JSON API routes for React frontend
$router->add("/api/{controller}/{action}", ["namespace" => "API"]);
$router->add("/api/{controller}", ["namespace" => "API", "action" => "index"]);

//$router->add("",["controller"=>"home","action"=>"index"]);
$router->add("/{controller}/{action}");

return $router;
