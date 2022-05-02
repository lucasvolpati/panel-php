<?php

    use Source\Models\User;

    $users = (new User())->findAll();

    $v->layout("template");


?>

<main id="main">
    <div id="buscar">
        <!-- <input type="text" name="seach" id="seach" placeholder="Buscar"> -->

        <a href="<?= url() ?>/novo-usuario" class="btn btn-primary">Novo <i class="fas fa-plus-circle"></i></a>
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
                for ($i=0; $i < count($users); $i++) { 
                    echo "<tr>" . "\n";
                        echo "<th scope='row'>{$users[$i]->id_user}</th>" . "\n";
                            echo "<td>{$users[$i]->name}</td>" . "\n";
                            echo "<td>{$users[$i]->email}</td>" . "\n";
                            echo "<td>{$users[$i]->updated_at}</td>" . "\n";
                            echo "<td>
                                    <a class='btn btn-primary' href='editar-usuario&id={$users[$i]->id_user}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                                    <a class='btn btn-danger' href='?id={$users[$i]->id_user}' data-bs-toggle='modal' data-bs-target='#modalDelete'><i id='delete' class='fas fa-trash'></i></a>
                                    
                                </td>" . "\n";
                    echo "</tr>"; 
                } //<form>
                //<input type='hidden' value='{$users[$i]->id_user}' name='id'>
                //<button class='btn btn-danger' type='submit' data-bs-toggle='modal' data-bs-target='#modalDelete'><i id='delete' class='fas fa-trash'></i></button>
            //</form>
            
            
            ?>
            <div class="modal" id="modalDelete" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja mesmo exluir <?= $_GET['id'] ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger">Excluir <i id='delete' class='fas fa-trash'></i></button>
                    </div>
                    </div>
                </div>
                </div>
        </tbody>
    </table>
</main>