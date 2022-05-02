<?php

use Source\Models\User;

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

$user = (new User())->findById($id);

$v->layout("template");

?>

<main id="main-new">
    <form class="row g-3">
        <div class="col-12">
            <label for="inputName" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nome" value="<?= $user->name ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">E-Mail:</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail" value="<?= $user->email ?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
        </div>
        <!-- <div class="col-md-4">
            <label for="inputState" class="form-label">Função:</label>
            <select id="inputState" class="form-select">
            <option selected>Admin</option>
            <option>Usuário</option>
            </select>
        </div> -->
        <div class="col-12">
            <a onclick="window.location.href='<?= url() ?>/usuarios'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
            <button type="submit" class="btn btn-success">Atualizar <i class="fas fa-save"></i></button>
            
        </div>
    </form>
    </main>
