<?php
require __DIR__ . "/vendor/autoload.php";

use Source\Core\Connect;
use Source\Core\Message;



$con = Connect::getInstance()->prepare("INSERT INTO users (name,email,password) VALUES (:name, :email, :pass)");

$name = 'Lucas';
$email = 'lucas@peachbrasil.com.br';
$pass = password_hash("marcelly", CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);

$con->bindValue(":name", $name);
$con->bindValue(":email", $email);
$con->bindValue(":pass", $pass);

$con->execute();