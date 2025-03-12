<?php

require_once "vendor/autoload.php";

use Source\Core\Database;

Database::connect();

foreach (glob("database/migrations/*.php") as $filename) {
    require $filename;
}

echo "Migrations executadas com sucesso!\n";