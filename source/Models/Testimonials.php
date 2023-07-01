<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Message;
use Source\Core\Model;

class Testimonials extends Model
{
    protected static $entity = "testimonials";

    protected static $safe = ["id", "created_at", "updated_at"];

    private $debug;

    public function __construct(int $debug = 0)
    {
        $this->debug = $debug;
    }

    public function bootstrap(string $name, string $email, string $testimonial, string $visibility)
    {
        $this->name = $name;
        $this->email = $email;
        $this->testimonial = $testimonial;
        $this->visibility = $visibility;

        return $this;
    }

    public function bootstrapUpdate(string $name, string $testimonial, string $visibility)
    {
        $this->name = $name;
        $this->testimonial = $testimonial;
        $this->visibility = $visibility;

        return $this;
    }

    public function find(string $terms, string $params, string $columns = "*")
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE {$terms}", $params);
        if ($this->fail() || !$find->rowCount()) {
            $this->message->error("Não foi possivel realizar a busca.", $this->debug, $this->fail());
            return null;
        }

        return $find->fetch();
    }

    public function findById(int $id, string $columns = "*")
    {
        return $this->find("id = :id", "id={$id}", $columns);
    }

    public function findAll()
    {
        $stmt = Connect::getInstance()->prepare("SELECT * FROM " . self::$entity);
        $stmt->execute();

        $testimonials = $stmt->fetchAll();
        return $testimonials;
    }

    public function save()
    {
        $depoId = $this->create(self::$entity, $this->safe());
        if ($this->fail()) {
            return $this->message->error("Erro ao cadastrar novo depoimentos, verifique os dados e tente novamente.", $this->debug, $this->fail());
            //return null;
        }
        // $this->data = $this->findById($depoId);Depoimento cadastrado com sucesso
        return $this->message->error("Depoimento cadastrado com sucesso.");
    }

    public function updateTestimonial(string $depoId)
    {
        $this->update(self::$entity, $this->safe(), "id=:id", "id={$depoId}");
        if ($this->fail()) {
            return $this->message()->error("Erro ao atualizar, tente novamente mais tarde!", $this->debug, $this->fail());
            //return null;
        }

        return $this->message()->error("Cadastro atualizado com sucesso!");
    }

    public function deleteTestimonial(string $depoId)
    {
        $this->delete(self::$entity, "id = :id", $depoId);
        if ($this->fail()) {
            $this->message->error("Erro ao deletar depoimento!", $this->debug, $this->fail());
            return null;
        }
        $this->data = null;
        return $this;
    }
}
