<?php
$this->layout("template");

use Source\Models\User;

$user = new User();


?>

<main id="main-new">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/usuarios") ?>">Usuários</a></li>
            <li class="breadcrumb-item active" aria-current="page">Novo Usuário</li>
        </ol>
    </nav>
    <form method="get" action="" class="row g-3" novalidate>
        <div class="col-12">
            <label for="inputName" class="form-label">Nome:</label>
            <input name="name" type="text" class="form-control" id="inputName" placeholder="Nome">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">E-Mail:</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="E-Mail">
        </div>
        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha:</label>
            <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="Senha">
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
            <button type="submit" class="btn btn-success">Cadastrar <i class="fas fa-save"></i></button>
        </div>

        <?php
        //$data = (object) filter_input_array(INPUT_GET, FILTER_DEFAULT);
        // $name = filter_input(INPUT_GET, "name", FILTER_DEFAULT);
        // $data = (object) [
        //     "name" => filter_input(INPUT_GET, "name", FILTER_DEFAULT),
        //     "email" => filter_input(INPUT_GET, "email", FILTER_DEFAULT),
        //     "password" => filter_input(INPUT_GET, "pass", FILTER_DEFAULT)
        // ];

        $data = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        if (key_exists("name", $data)) {
            $user->bootstrap(
                $data['name'],
                $data['email'],
                $data['pass']
            );

            if (in_array("", $data)) {
                echo $user->message()->error("Preencha todos os dados.");
            } else if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
                echo $user->message()->error("E-mail inválido, favor verificar.");
            } else if (!is_passwd($data['pass'])) {
                $min = CONF_PASSWD_MIN_LEN;
                $max = CONF_PASSWD_MAX_LEN;
                echo $user->message()->error("A senha deve conter entre {$min} e {$max} caracteres.");
            } else if (!$user->save()) {
                echo $user->message();
            } else {
                echo $user->message()->success("Cadastro realizado com sucesso!");
            }
        }
        ?>
    </form>

</main>