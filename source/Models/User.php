<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class User extends Model 
{
    /** @var string $entity database table */
    protected static $entity = 'users';

    protected $safe = ['id_user', 'updated_at'];

    public function bootstrap(string $name, string $email, string $password): User
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        return $this;
    }

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

    public function findById(string $id, string $columns = "*")
    {
        return $this->find("id = :id", "id = {$id}", $columns);
    }

    public function findAll()
    {
        $stmt = Connect::getInstance()->prepare("SELECT id_user, name, email FROM users");
        $stmt->execute();

        $users = $stmt->fetchAll();
        return $users;
    }

    /**
     * Create
     */

    public function save() 
    {
        if (!is_email($this->email)) {
            $this->message()->warning("Email informado não é válido!");
            return null;
        }

        if(!is_passwd($this->password)) {
            $min = CONF_PASSWD_MIN_LEN;
            $max = CONF_PASSWD_MAX_LEN;
            $this->message()->warning("A senha deve ter entre {$min} e {$max} caracteres.");
            return null;
        }else {
            $this->password = passwd($this->password);
        }

        /** Create User */

        if (empty($this->id)) {
            if ($this->findUserByEmail($this->email)) {
                $this->message()->warning("O e-mail informado já está cadastrado!");
                return null;
            }

            // $userId = $this->create(self::$entity, )
        }

    }
}