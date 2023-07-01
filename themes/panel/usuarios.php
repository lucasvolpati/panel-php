<?php

use Source\Models\User;

$users = (new User())->findAll();

$this->layout("_template", ['title' => $this->e($title)]);


?>

<main id="main-user">
    <?php
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);


    if ($id) {

        $user = new User();

        if (!$user->deleteUser($id)) {
            echo $user->message();
        } else {
            echo $user->message()->success("Usuário deletado com sucesso!");
        }
    }

    ?>
    <div id="buscar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuários</li>
            </ol>
        </nav>
        <!-- <input type="text" name="seach" id="seach" placeholder="Buscar"> -->

        <a href="<?= url() ?>/novo-usuario" class="btn btn-primary btn-new">Novo <i class="fas fa-plus-circle"></i></a>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Atualizado Em</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($users); $i++) {
                echo "<tr>" . "\n";
                echo "<th scope='row'>{$users[$i]->id}</th>" . "\n";
                echo "<td>{$users[$i]->name}</td>" . "\n";
                echo "<td>{$users[$i]->email}</td>" . "\n";
                echo "<td>" . date_fmt($users[$i]->updated_at) . "</td>" . "\n";
                echo "<td>
                                    <a class='btn btn-primary' href='editar-usuario&id={$users[$i]->id}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                                    <button id='{$users[$i]->id}' class='btn btn-danger deleteBtn' ><i class='fas fa-trash'></i></button>
                                    
                                </td>" . "\n";
                echo "</tr>"; //onclick='deleteUser({$users[$i]->id})'
            }


            ?>
            <div class="modal" id="modalDelete" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Excluir usuário</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Deseja exluir permanentemente este usuário?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a id="deleteConfirm" type="button" class="btn btn-danger">Excluir <i id='delete' class='fas fa-trash'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</main>