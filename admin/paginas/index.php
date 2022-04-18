<!DOCTYPE html>
<html lang="pt-br">

<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Source\Core\Session;
use Source\Models\User;

$session = new Session();

if (!$session->login) {
    header('location:index.php');
}

$user = (new User())->findNameByEmail($session->login);

require_once __DIR__ . "/../../includes/head.php";
?>
<body>
    
    <?php
        require_once __DIR__ . "/../../includes/menu.php";
    ?>
    
    <main>

    </main>

    <?php
        require_once __DIR__ . "/../../includes/footer.php";
    ?>
</body>
</html>