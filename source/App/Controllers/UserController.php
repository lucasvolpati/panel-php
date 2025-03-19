<?php

namespace Source\App\Controllers;

use Source\Core\Controller;

class UserController extends Controller
{
    public function users():void
    {
        echo $this->render("usuarios", [
            "title" => "Painel CMS | Usuários"
        ]);
    }

    public function edit_user():void
    {
        echo $this->render("usuarios-editar", [
            "title" => "CMS | Editar Usuário"
        ]);
    }

    public function new_user():void
    {
        echo $this->render("usuarios-novo", [
            "title" => "CMS | Novo Usuário"
        ]);
    }
}