<?php
    require_once __DIR__ . "/../../vendor/autoload.php";

    use Source\Core\Message;
    use Source\Core\Session;
    use Source\Models\User;

    $session = new Session();
    $message = new Message();
    $user = new User();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css") ?>">

    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>teste</title>
</head>
<body>
    <style>
        img {
            mix-blend-mode: multiply;
        }
    </style>
   
    <main id="main-login">
        <img src="<?= theme("/assets/img/lock.jpg") ?>" alt="logo desenvolvedor">

        <form action="" method="post" id="content" novalidate>
            <label for="email"><i class="fa-solid fa-lock"></i>Email</label>
            <input type="email" name="email" id="email" placeholder="Email">

            <label for="senha"><i class="fa-solid fa-key"></i>Senha</label>
            <input type="password" name="password" id="senha" placeholder="Senha">

            <button type="submit"><i class="fa-solid fa-arrow-right-to-bracket"></i>FAZER LOGIN</button>
        </form>

        <div class="copy">
            <p>&copy; Desenvolvido por <a href="https://lucasalcantara.dev.br">Luk</a> <a href="https://venicio.dev.br">e Vini &trade;</a>  | <script> document.write(new Date().getFullYear()) </script></p>
        </div>

        <section class="validate">
        <?php
          
            $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            
            if ($data) {
                $email = $data['email'];
                $password = $data['password'];

                if (in_array("", $data)) {
                    echo $message->error("Favor preencher todos os campos!");
                    return null;
                }elseif(!is_email($email)) {
                    echo $message->error("Favor informar um e-mail válido!");
                    return null;
                }elseif(!is_passwd($password)) {
                    echo $message->error("A senha deve conter entre 8 e 40 caracteres!");
                    return null;
                }elseif(!$user->findNameByEmail($email)) {
                    echo $message->error("Email não cadastrado!");
                    return null;
                }
                $dataUser = $user->findUserByEmail($email);
                if($email == $dataUser->email && passwd_verify($password, $dataUser->password)) {
                    $session->set("login", $email);
                    var_dump($session);
                    var_dump(url());
                    //echo "<script>document.location='".url("/")."'</script>";
                }else {
                    echo $message->error("Email ou senha inválidos, verifique e tente novamente!");
                }
            }
        ?>
        </section>
    </main>

    <!-- JS FONTAWESOME -->
    <script src="https://kit.fontawesome.com/860f00444a.js" crossorigin="anonymous"></script>
</body>
</html>