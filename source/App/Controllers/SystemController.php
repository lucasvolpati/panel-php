<?php

namespace Source\App\Controllers;

use Source\Core\Controller;

class SystemController extends Controller
{
    public function system(): void
    {
        echo $this->render("sistema", [
            "title" => "Painel CMS | Sistema"
        ]);
    }

    public function address_system(): void
    {
        echo $this->render("includes/sistema/endereco", [
            "title" => "Painel CMS | Endereço"
        ]);
    }

    public function contact_system(): void
    {
        echo $this->render("includes/sistema/contato", [
            "title" => "Painel CMS | Contatos"
        ]);
    }

    public function social_system(): void
    {
        echo $this->render("includes/sistema/sociais", [
            "title" => "Painel CMS | Social"
        ]);
    }

    public function virtual_system(): void
    {
        echo $this->render("includes/sistema/virtual", [
            "title" => "Painel CMS | Loja Virtual"
        ]);
    }

    public function lgpd_system(): void
    {
        echo $this->render("includes/sistema/lgpd", [
            "title" => "Painel CMS | LGPD"
        ]);
    }

    public function floater_system(): void
    {
        echo $this->render("includes/sistema/floater", [
            "title" => "Painel CMS | Floater"
        ]);
    }

    public function ftp_system(): void
    {
        echo $this->render("includes/sistema/ftp", [
            "title" => "Painel CMS | FTP"
        ]);
    }
}