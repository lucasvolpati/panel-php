<?php

namespace Source\App\Controllers;

use Source\Core\Controller;

class TestimonialController extends Controller
{
    public function testimonials(): void
    {
        echo $this->render("depoimentos", [
            "title" => "Painel CMS | Depoimentos"
        ]);
    }

    public function new_testimonials(): void
    {
        echo $this->render("depoimentos-novo", [
            "title" => "CMS | Novo Depoimento"
        ]);
    }

    public function edit_testimonials(): void
    {
        echo $this->render("depoimentos-editar", [
            "title" => "CMS | Editar Depoimento"
        ]);
    }
}