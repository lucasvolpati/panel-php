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
    protected function create(): ?int
    {
        return 0;
    }

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

}