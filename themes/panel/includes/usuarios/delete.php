<?php
require __DIR__ . "/../../../../vendor/autoload.php";

use Source\Models\User;

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

var_dump($id);
$user = new User();

if (!$user->deleteUser($id)) {
    echo $user->message();
}else {
    echo $user->message()->success("Usuário deletado com sucesso!");
}

// header("Location: /usuarios");