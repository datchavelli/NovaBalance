<?php

declare(strict_types=1);

define("ROOT_PATH", dirname(__DIR__));

session_start();

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// This allows React to handle frontend routes starting with /NovaBalance or /NovaBalance/react
$reactBase = '';

// If the request is for the React app (and not admin or API or real files), serve index.html
if (
    str_starts_with($path, $reactBase)
    && !str_starts_with($path, "$reactBase/admin")
    && !str_starts_with($path, "$reactBase/api")
    && !str_starts_with($path, "$reactBase/home")
    && !is_file(__DIR__ . $path)
) {
    require __DIR__ . '/react/index.html';
    exit;
}


// --- Normal MVC boot process starts here ---

// Load Composer's autoloader
require ROOT_PATH . "/vendor/autoload.php";

spl_autoload_register(function (string $class_name) {
    require ROOT_PATH . "/src/".str_replace("\\", "/", $class_name).".php";
});

$dotenv = new Framework\Dotenv();
$dotenv->load(ROOT_PATH . "/.env");

set_error_handler("Framework\ErrorHandler::handleError");
set_exception_handler("Framework\ErrorHandler::handleException");

$router = require ROOT_PATH . "/config/routes.php";
$container = require ROOT_PATH . "/config/services.php";
$middleware = require ROOT_PATH . "/config/middleware.php";

$dispatcher = new Framework\Dispatcher($router, $container, $middleware);

$request = Framework\Request::createFromGlobals();
$response = $dispatcher->handle($request);
$response->send();
