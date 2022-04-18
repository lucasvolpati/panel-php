<?php



require_once __DIR__ . "/../../vendor/autoload.php";

use Source\Core\Session;
use Source\Models\User;

$session = new Session();
$user = (new User())->findNameByEmail($session->login);

require_once __DIR__ . "/../../includes/head.php";
?>
<body>
    
    <?php
        require_once __DIR__ . "/../../includes/menu.php";
    ?>
    

    <!-- ARQUIVOS JAVASCRIPT -->
    <script src=<?=CONF_URL_BASE . "/assets/js/nav.js" ?>></script>
</body>
</html>