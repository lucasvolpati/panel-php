<?php

namespace Source\Models;

use Source\Core\Model;

class User extends Model 
{
    /** @var string $entity database table */
    protected static $entity = 'users';

    public function find(string $terms, string $params, string $columns = "*") 
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE {$terms}", $params);
        if($this->fail() || !$find->rowCount()) {
            return null;
        }
        return $find->fetch();
    }

    public function findNameByEmail(string $email, string $columns = "name, email")
    {
        return $this->find("email = :email", "email={$email}", $columns);
    }

    public function findUserByEmail(string $email, string $columns = "*")
    {
        return $this->find("email = :email", "email={$email}", $columns);
    }
}