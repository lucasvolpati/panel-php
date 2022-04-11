<?php

namespace Source\Models;

class User {
    public $name;
    public $age;

    public function __construct() {
        $this->name = "Lucas";
    }
}