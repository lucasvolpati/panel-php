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

    public function users():void
    {
        echo $this->view->render("usuarios", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function edit():void
    {
        echo $this->view->render("editar-usuario", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function new_user():void
    {
        echo $this->view->render("novo-usuario", [
            "title" => "Painel ADM Peach Breasil"
        ]);
    }

    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "{$data['errcode']} | Oopps!"
        ]);
    }
}