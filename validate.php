<?php
require_once __DIR__ . "/vendor/autoload.php";

use Source\Core\Message;
use Source\Core\Session;
use Source\Models\User;

$session = new Session();

$data = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

$message = new Message();
$user = new User();




if ($data) {
    $email = $data['email'];
    $password = $data['password'];

    if (in_array("", $data)) {
        header('location:index.php');
        echo $message->error("Favor preencher todos os campos!");
        return null;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $message->error("Favor informar um e-mail válido!");
        return null;
    }elseif(strlen($password) < CONF_PASSWD_MIN_LEN || strlen($password) > CONF_PASSWD_MAX_LEN) {
        echo $message->error("A senha deve conter entre 8 e 40 caracteres!");
    }//else {
    //         header('location:protected.php');
    elseif(!$user->findNameByEmail($email)) {
        echo $message->error("Email não cadastrado!");

        return null;
    }
    $dataUser = $user->findUserByEmail($email);
    if($email == $dataUser->email && password_verify($password, $dataUser->password)) {
        // echo $message->success("Login concedido");
        $session->set("login", $email);
        
        header('location:admin/');
    }else {
        echo $message->error("Email ou senha inválidos, verifique e tente novamente!");
    }
}
?>