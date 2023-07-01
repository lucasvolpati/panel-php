<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/views/" . CONF_VIEW_THEME . "/");
    }

    public function home():void
    {
        echo $this->view->render("home", [
            "title" => "Painel CMS | Home"
        ]);
        
    }

    public function login():void
    {
        echo $this->view->render("login", [
            "title" => "Painel CMS | Login"
        ]);
        
    }

    /****************
     * MENU USUARIOOS
     ****************/

    public function users():void
    {
        echo $this->view->render("usuarios", [
            "title" => "Painel CMS | Usuários"
        ]);
    }

    public function edit_user():void
    {
        echo $this->view->render("usuarios-editar", [
            "title" => "CMS | Editar Usuário"
        ]);
    }

    public function new_user():void
    {
        echo $this->view->render("usuarios-novo", [
            "title" => "CMS | Novo Usuário"
        ]);
    }

    /*****************
     * PÁGINA DE ERRO
     *****************/

    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "{$data['errcode']} | Oopps!"
        ]);
    }

    /***************
     * MENU PÁGINAS
     ***************/

    public function page(): void
    {
        echo $this->view->render("paginas", [
            "title" => "Painel CMS | Páginas"
        ]);
    }

    public function new_page(): void
    {
        echo $this->view->render("paginas-nova", [
            "title" => "CM | Nova Página"
        ]);
    }

    /*******************
     * MENU DEPOIMENTOS
     *******************/

    public function testimonials(): void
    {
        echo $this->view->render("depoimentos", [
            "title" => "Painel CMS | Depoimentos"
        ]);
    }

    public function new_testimonials(): void
    {
        echo $this->view->render("depoimentos-novo", [
            "title" => "CMS | Novo Depoimento"
        ]);
    }

    public function edit_testimonials(): void
    {
        echo $this->view->render("depoimentos-editar", [
            "title" => "CMS | Editar Depoimento"
        ]);
    }

    /*******************
     * MENU ARTIGOS
     *******************/

    public function articles(): void
    {
        echo $this->view->render("artigos", [
            "title" => "Painel CMS | Artigos"
        ]);
    }

    public function new_article(): void
    {
        echo $this->view->render("artigos-novo", [
            "title" => "CMS | Novo Artigo"
        ]);
    }

    /*******************
     * MENU SISTEMA
     *******************/

    public function system(): void
    {
        echo $this->view->render("sistema", [
            "title" => "Painel CMS | Sistema"
        ]);
    }

    public function address_system(): void
    {
        echo $this->view->render("includes/sistema/endereco", [
            "title" => "Painel CMS | Endereço"
        ]);
    }

    public function contact_system(): void
    {
        echo $this->view->render("includes/sistema/contato", [
            "title" => "Painel CMS | Contatos"
        ]);
    }

    public function social_system(): void
    {
        echo $this->view->render("includes/sistema/sociais", [
            "title" => "Painel CMS | Social"
        ]);
    }

    public function virtual_system(): void
    {
        echo $this->view->render("includes/sistema/virtual", [
            "title" => "Painel CMS | Loja Virtual"
        ]);
    }

    public function lgpd_system(): void
    {
        echo $this->view->render("includes/sistema/lgpd", [
            "title" => "Painel CMS | LGPD"
        ]);
    }

    public function floater_system(): void
    {
        echo $this->view->render("includes/sistema/floater", [
            "title" => "Painel CMS | Floater"
        ]);
    }

    public function ftp_system(): void
    {
        echo $this->view->render("includes/sistema/ftp", [
            "title" => "Painel CMS | FTP"
        ]);
    }

    
}