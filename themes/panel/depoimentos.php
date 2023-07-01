<?php

use Source\Models\Testimonials;

$this->layout('template');

$depo = new Testimonials();
$all = $depo->findAll();



// var_dump($all);
?>

<main id="main-testimonials" class="content-view">
    <?php
    $delete = new Testimonials();

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($id) {
        // var_dump($id);
        if (!$delete->deleteTestimonial($id)) {
            echo $delete->message();
        } else {
            echo $delete->message()->success("Depoimento deletado com sucesso!");
        }
    }


    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Depoimentos</li>
        </ol>
    </nav>
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deletar Depoimento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="m-0 p-0">Deseja realmente deletar este depoimento?</p>
                </div>
                <form action="" method="get" class="modal-footer modal-form-delete">
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a id="deleteConfirm" type="submit" class="btn btn-danger">Deletar</a>
                </form>
            </div>
        </div>
    </div>
    <div class="container-main">

        <div class="p-4 bg-white border">
            <form action="" method="POST" class="form mb-4">
                <div class="row">
                    <div class="col-md-2">
                        <a href="<?= url("/novo-depoimento") ?>" class="btn btn-primary float-end" title="Novo Depoimento">Novo <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Visível</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    for ($i = 0; $i < count($all); $i++) {

                        if ($all[$i]->visibility == 1) {
                            $visible = "<i class='fas fa-check-circle visible'></i>";
                        } else {
                            $visible = "<i class='fas fa-times-circle hidden'></i>";
                        }

                        echo "
                                <tr>
                                    <th scope='row'>{$all[$i]->id_depo}</th>
                                    <td>{$all[$i]->name}</td>
                                    <td>{$all[$i]->email}</td>
                                    <td>{$visible}</td>
                                    <td>" . date_fmt($all[$i]->created_at) . "</td>
                                    <td>" . date_fmt($all[$i]->updated_at) . "</td>
                                    <td>
                                        <a class='btn btn-primary' href='editar-depoimento&id={$all[$i]->id_depo}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                                        <button id='{$all[$i]->id_depo}' class='btn btn-danger deleteBtn' ><i class='fas fa-trash'></i></button>
                                    </td>
                                </tr>
                            "; //data-bs-toggle='modal' data-bs-target='#modalDelete'
                    }
                    ?>
                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Lucas Alcantara Rodrigues</td>
                        <td><i class="fas fa-check-circle visible"></i></td>
                        <td>
                            <a class='btn btn-primary' href='editar-usuario&id={$users[$i]->id_user}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                            <a class='btn btn-danger' href='?id={$users[$i]->id_user}' data-bs-toggle='modal' data-bs-target='#modalDelete'><i id='delete' class='fas fa-trash'></i></a>
                        </td>
                    </tr> -->

                </tbody>
            </table>
            <nav class="m-0">
                <ul class="pagination m-0">
                    <li class="page-item"><a class="page-link" href="https://www.peachbrasil.com.br/loja/painel/site/depoimentos?page=1" title="Página 1">1</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>