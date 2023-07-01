<?php

use Source\Core\Session;

require_once __DIR__ . "/../../vendor/autoload.php";

$session = new Session();

$session->unset("login");

header("location:".url()."/login");