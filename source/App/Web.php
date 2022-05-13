<?php

namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home():void
    {
        echo $this->view->render("home", [
            "title" => "Painel ADM Peach Brasil"
        ]);
        
    }

    /****************
     * MENU USUARIOOS
     ****************/

    public function users():void
    {
        echo $this->view->render("usuarios", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function edit_user():void
    {
        echo $this->view->render("usuarios-editar", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function new_user():void
    {
        echo $this->view->render("usuarios-novo", [
            "title" => "Painel ADM Peach Breasil"
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
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function new_page(): void
    {
        echo $this->view->render("paginas-nova", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    /*******************
     * MENU DEPOIMENTOS
     *******************/

    public function testimonials(): void
    {
        echo $this->view->render("depoimentos", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function new_testimonials(): void
    {
        echo $this->view->render("depoimentos-novo", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function edit_testimonials(): void
    {
        echo $this->view->render("depoimentos-editar", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    /*******************
     * MENU ARTIGOS
     *******************/

    public function articles(): void
    {
        echo $this->view->render("artigos", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function new_article(): void
    {
        echo $this->view->render("artigos-novo", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    /*******************
     * MENU SISTEMA
     *******************/

    public function system(): void
    {
        echo $this->view->render("sistema", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function address_system(): void
    {
        echo $this->view->render("includes/sistema/endereco", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function contact_system(): void
    {
        echo $this->view->render("includes/sistema/contato", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function social_system(): void
    {
        echo $this->view->render("includes/sistema/sociais", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function virtual_system(): void
    {
        echo $this->view->render("includes/sistema/virtual", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function lgpd_system(): void
    {
        echo $this->view->render("includes/sistema/lgpd", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function floater_system(): void
    {
        echo $this->view->render("includes/sistema/floater", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function ftp_system(): void
    {
        echo $this->view->render("includes/sistema/ftp", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    
}