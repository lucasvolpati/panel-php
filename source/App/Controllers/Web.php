<?php

namespace Source\App\Controllers;

use Source\Core\Controller;

class Web extends Controller
{
    /*****************
     * PÁGINA DE ERRO
     *****************/

    public function error(array $data): void
    {
        echo $this->render("error", [
            "title" => "{$data['errcode']} | Oopps!"
        ]);
    }

    /***************
     * MENU PÁGINAS
     ***************/

//    public function page(): void
//    {
//        echo $this->view("paginas", [
//            "title" => "Painel CMS | Páginas"
//        ]);
//    }
//
//    public function new_page(): void
//    {
//        echo $this->view("paginas-nova", [
//            "title" => "CM | Nova Página"
//        ]);
//    }
}
