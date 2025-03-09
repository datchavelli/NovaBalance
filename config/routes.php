<?php

$router = new Framework\Router;

$router->add("NovaBalance/admin/{controller}/{action}", ["namespace"=>"Admin"]);
$router->add("NovaBalance/{title}/{id:\d+}/{page:\d+}/",["controller" => "products", "action"=>"showPage"]);
$router->add("NovaBalance/product/{slug:[\w-]+}", ["controller" => "products", "action" => "show"]);
// $router->add("NovaBalance/{controller}/{id:\d+}/{action}");
$router->add("NovaBalance/{controller}/{id:\d+}/show", ["action" => "show","middleware" => "message|message"]);
$router->add("NovaBalance/{controller}/{id:\d+}/edit", ["action" => "edit"]);
$router->add("NovaBalance/{controller}/{id:\d+}/update", ["action" => "update"]);
$router->add("NovaBalance/{controller}/{id:\d+}/delete", ["action" => "delete"]);
$router->add("NovaBalance/{controller}/{id:\d+}/destroy", ["action" => "destroy", "method" => "post"]);

$router->add("NovaBalance/home/index",["controller"=>"home","action"=>"index"]);
$router->add("NovaBalance/usluge",["controller"=>"home","action"=>"usluge"]);
$router->add("NovaBalance/products",["controller"=>"products","action"=>"index"]);
$router->add("NovaBalance/",["controller"=>"home","action"=>"index"]);
$router->add("NovaBalance/{controller}/{action}");

return $router;