<?php
ob_start();

require "vendor/autoload.php";

/**
 * BBOSTRAP
 */
use Source\Core\Session;
use Source\Models\User;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), ":");

if (!$session->login) {
    header("Location: ".url()."/painel");
}

/**
 * WEB ROUTES
 */
$route->namespace("Source\App");
$route->get("/", "Web:home");
$route->get("/usuarios", "Web:users");
$route->get("/editar-usuario", "Web:edit");
$route->get("/novo-usuario", "Web:new_user");

/**
 * ERROR ROUTES
*/
$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$route->dispatch();


/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();