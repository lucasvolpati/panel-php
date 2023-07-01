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


/**
 * WEB ROUTES
 */
$route->namespace("Source\App");
$route->get("/", "Web:home");
$route->get("/login", "Web:login");
$route->post("/login", "Web:login");

/** MENU USUÁRIOS */
$route->get("/usuarios", "Web:users");
$route->get("/editar-usuario", "Web:edit_user");
$route->get("/novo-usuario", "Web:new_user");

/** MENU PÁGINAS */
$route->get("/paginas", "Web:page");
$route->get("/nova-pagina", "Web:new_page");

/** MENU DEPOIMENTOS */
$route->get("/depoimentos", "Web:testimonials");
$route->get("/editar-depoimento", "Web:edit_testimonials");
$route->get("/novo-depoimento", "Web:new_testimonials");

/** MENU ARTIGOS */
$route->get("/artigos", "Web:articles");
$route->get("/artigos/novo-artigo", "Web:new_article");
$route->post("/artigos/novo-artigo", "Web:new_article");


/** MENU SISTEMA */
$route->get("/sistema", "Web:system");
$route->get("/sistema/endereco", "Web:address_system");
$route->get("/sistema/contato", "Web:contact_system");
$route->get("/sistema/redes-sociais", "Web:social_system");
$route->get("/sistema/loja-virtual", "Web:virtual_system");
$route->get("/sistema/lgpd", "Web:lgpd_system");
$route->get("/sistema/floater", "Web:floater_system");
$route->get("/sistema/ftp", "Web:ftp_system");


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