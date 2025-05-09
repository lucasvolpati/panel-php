<?php

use Source\Models\Article;
use Source\Support\Thumb;

$this->layout("_template", ['title' => $this->e($title)]);
?>

<main id="main-pages">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Artigos</li>
        </ol>
    </nav>

    <div id="buscar">
        <a class="btn btn-primary" href="<?= url("/artigos/novo-artigo") ?>">Novo <i class="fas fa-plus-circle"></i></a>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Capa</th>
                <th scope="col">Título</th>
                <th scope="col">Visível</th>
                <th scope="col">Criado Em</th>
                <th scope="col">Atualizado Em</th>
                <th scope="col"></th>
            </tr>
        </thead>



        <tbody>
            <?php
            $thumb = new Thumb();

            $articles = Article::all();


            for ($i = 0; $i < count($articles); $i++) {
                $image = $thumb->make($articles[$i]->image, 100);

                if ($articles[$i]->visibility == 1) {
                    $visible = "<i class='fas fa-check-circle visible'></i>";
                } else {
                    $visible = "<i class='fas fa-times-circle hidden'></i>";
                }

                echo "
                    <tr>
                        <th scope='row'>{$articles[$i]->id}</th>
                        <td><img src='{$image}' alt='Thumb Artigo' /></td>
                        <td>{$articles[$i]->title}</td>
                        <td>{$visible}</td>
                        <td>" . date_fmt($articles[$i]->created_at) . "</td>
                        <td>" . date_fmt($articles[$i]->updated_at) . "</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='editar-depoimento&id={$articles[$i]->id}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                            <button id='{$articles[$i]->id}' class='btn btn-danger btn-sm deleteBtn' ><i class='fas fa-trash'></i></button>
                        </td>
                    </tr>
                    ";
            }

            ?>
        </tbody>
    </table>
</main>