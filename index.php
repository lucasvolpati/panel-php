<?php
ob_start();

require "vendor/autoload.php";

/**
 * BOOTSTRAP
 */
use Source\Core\Session;
use CoffeeCode\Router\Router;
use Source\App\Middlewares\AuthMiddleware;

$session = new Session();
$route = new Router(url(), ":");

/**
 * PRINCIPAL ROUTES
 */
$route->namespace("Source\App\Controllers");
$route->get("/login", "AuthController:index", 'login.index');
$route->post("/login", "AuthController:attempt");

$route->group('', AuthMiddleware::class);
$route->get("/logout", "AuthController:logout");
$route->get("/", "AuthController:home", 'panel.home');

/** MENU USUÁRIOS */
$route->get("/usuarios/", 'UserController:index', 'panel.users');
$route->get("/usuario/remover/{id}", 'UserController:remove', 'panel.users');
$route->get("/usuario", "UserController:update", 'panel.users-update');
$route->post("/usuario", "UserController:create");

/** MENU PÁGINAS */
//$route->get("/paginas", "Web:page");
//$route->get("/nova-pagina", "Web:new_page");

/** MENU DEPOIMENTOS */
$route->get("/depoimentos", "TestimonialController:testimonials");
$route->get("/editar-depoimento", "TestimonialController:edit_testimonials");
$route->get("/novo-depoimento", "TestimonialController:new_testimonials");
$route->post("/novo-depoimento", "TestimonialController:new_testimonials");

/** MENU ARTIGOS */
$route->get("/artigos", "ArticleController:articles");
$route->get("/artigos/novo-artigo", "ArticleController:new_article");
$route->post("/artigos/novo-artigo", "ArticleController:new_article");


/** MENU SISTEMA */
$route->get("/sistema", "SystemController:system");
$route->get("/sistema/endereco", "SystemController:address_system");
$route->get("/sistema/contato", "SystemController:contact_system");
$route->get("/sistema/redes-sociais", "SystemController:social_system");
$route->get("/sistema/loja-virtual", "SystemController:virtual_system");
$route->get("/sistema/lgpd", "SystemController:lgpd_system");
$route->get("/sistema/floater", "SystemController:floater_system");
$route->get("/sistema/ftp", "SystemController:ftp_system");


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