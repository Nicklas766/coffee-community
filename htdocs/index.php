<?php
/**
 * Bootstrap the framework and handle the request.
 */

// Were are all the files?
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));
define("ANAX_APP_PATH", ANAX_INSTALL_PATH);

// Include essentials
require ANAX_INSTALL_PATH . "/config/error_reporting.php";

// Get the autoloader by using composers version.
require ANAX_INSTALL_PATH . "/vendor/autoload.php";

// Add all resources to $app
//$app = require ANAX_INSTALL_PATH . "/config/service.php";
$di  = new \Anax\DI\DIFactoryConfig("di.php");
//$app = new \Anax\App\App();
//$app = new \Anax\App\AppDI();
$app = new \Anax\App\AppDIMagic();
$app->setDI($di);

// Load the routes
// require ANAX_INSTALL_PATH . "/config/route.php";

$app->session->start();
// Leave to router to match incoming request to routes
$app->router->handle(
    $app->request->getRoute(),
    $app->request->getMethod()
);
