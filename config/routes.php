<?php

$router = new Framework\Router;

$router->add("NovaBalance/admin/{controller}/{action}", ["namespace"=>"Admin"]);
$router->add("NovaBalance/{title}/{id:\d+}/{page:\d+}/",["controller" => "home", "action"=>"showPage"]);
// $router->add("NovaBalance/{controller}/{id:\d+}/{action}");
// JSON API routes for React frontend
$router->add("NovaBalance/api/{controller}/{action}", ["namespace" => "API"]);
$router->add("NovaBalance/api/{controller}", ["namespace" => "API", "action" => "index"]);

//$router->add("NovaBalance/",["controller"=>"home","action"=>"index"]);
$router->add("NovaBalance/{controller}/{action}");

return $router;
