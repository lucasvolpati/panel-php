<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/img/favicon-peach.png" type="image/x-icon">
    <title>Peach Brasil | Login</title>
</head>
<body>
   
    <main id="main">
        <img src="assets/img/logo.png" alt="logo peachbrail">

        <form action="" method="get" id="content" novalidate>
            <label for="email"><i class="fa-solid fa-lock"></i>Email</label>
            <input type="email" name="email" id="email" placeholder="Email">

            <label for="senha"><i class="fa-solid fa-key"></i>Senha</label>
            <input type="password" name="password" id="senha" placeholder="Senha">

            <button type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i>FAZER LOGIN</button>
        </form>

        <div class="copy">
            <p>&copy; Desenvolvido por <a href="https://peachbrasil.com.br">Peach Brasil &trade;</a>  | <script> document.write(new Date().getFullYear()) </script></p>
        </div>

        <section class="validate">
            <?php
                // require_once __DIR__ . "/vendor/autoload.php";

                // use Source\Core\Message;
                // use Source\Core\Session;
                // use Source\Models\User;

                // $session = new Session();
                
                // $data = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

                // $message = new Message();
                // $user = new User();

                
                

                // if ($data) {
                //     $email = $data['email'];
                //     $password = $data['password'];

                //     if (in_array("", $data)) {
                //         echo $message->error("Favor preencher todos os campos!");
                //         return null;
                //     }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //         echo $message->error("Favor informar um e-mail válido!");
                //         return null;
                //     }elseif(strlen($password) < CONF_PASSWD_MIN_LEN || strlen($password) > CONF_PASSWD_MAX_LEN) {
                //         echo $message->error("A senha deve conter entre 8 e 40 caracteres!");
                //     }//else {
                //     //         header('location:protected.php');
                //     elseif(!$user->findNameByEmail($email)) {
                //         echo $message->error("Email não cadastrado!");

                //         return null;
                //     }
                //     $dataUser = $user->findUserByEmail($email);
                //     if($email == $dataUser->email && password_verify($password, $dataUser->password)) {
                //         // echo $message->success("Login concedido");
                //         $session->set("login", $email);
                        
                //         header('location:admin/');
                //     }else {
                //         echo $message->error("Email ou senha inválidos, verifique e tente novamente!");
                //     }
                // }
            ?>
        </section>
    </main>

    <!-- JS FONTAWESOME -->
    <script src="https://kit.fontawesome.com/860f00444a.js" crossorigin="anonymous"></script>
</body>
</html>