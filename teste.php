<?php

require "vendor/autoload.php";

use Source\Core\Connect;
use Source\Core\Message;
use Source\Models\User;






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
        // $user = new User();
        $message = new Message();

        // echo $message->info($user->name);

        // echo $message->success($user->name);

        // echo $message->warning($user->name);

        // echo $message->error($user->name);

        $conn = Connect::getInstance();
    ?>
</body>
</html>



