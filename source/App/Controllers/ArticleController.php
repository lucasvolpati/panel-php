<?php

namespace Source\App\Controllers;

use Source\Core\Controller;

class ArticleController extends Controller
{
    public function articles(): void
    {
        echo $this->render("artigos", [
            "title" => "Painel CMS | Artigos"
        ]);
    }

    public function new_article(): void
    {
        echo $this->render("artigos-novo", [
            "title" => "CMS | Novo Artigo"
        ]);
    }
}