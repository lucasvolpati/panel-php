<?php

namespace Source\Core;

abstract class Model {

    /** @var object|null */
    protected $data;

    /** @var \PDOException|null */
    protected $fail;

    /** @var Message|null */
    protected $message;

    /**
     * Model constructor
     */
    public function __construct()
    {
        $this->message = new Message();
    }

    /**
     * @return null|object
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException
     */
    public function fail(): ?\PDOException 
    {
        return $this->fail;
    }

    /**
     * @return Message|null
     */
    public function message(): ?Message 
    {
        return $this->message;
    }

    /**
     * @param string $entity
     * @param array $data
     * @return int|null
     */
    protected function create(string $entity, array $data): ?int
    {
        try {
            
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $stmt = Connect::getInstance()->prepare("INSERT INTO {$entity} ({$columns}) VALUES ({$values})");
            $stmt->execute($this->filter($data));

            return Connect::getInstance()->lastInsertId();

        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }


    /**
     * @param string $select
     * @param string $params
     * @return PDOStatement|null
     */
    protected function read(string $select, string $params = null): ?\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($select); 
            if ($params) {
                parse_str($params, $paramsArr);
                foreach($paramsArr as $key => $value) {
                    if ($key == 'limit' || $key == 'offset') {
                        $stmt->bindValue(":{$key}", $value, \PDO::PARAM_INT);
                    }else {
                        $stmt->bindValue(":{$key}", $value, \PDO::PARAM_STR);
                    }
                }
            }

            $stmt->execute();
            return $stmt;

        } catch (\PDOException $e) {
            $this->fail = $e;
        }
    }

    public function safe()
    {
        
    }


    /**
     * @return null|array
     */
    protected function filter(array $data): ?array
    {
        $filter = [];
        foreach ($data as $key => $value) {
            $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
        }

        return $filter;
    }

}