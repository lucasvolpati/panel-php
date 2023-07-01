<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Message;
use Source\Core\Model;

class Testimonials extends Model
{
    protected static $entity = "testimonials";

    protected static $safe = ["id", "created_at", "updated_at"];

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
        $find = $this->read("SELECT {$columns} FROM ".self::$entity." WHERE {$terms}", $params);
        if ($this->fail() || !$find->rowCount()) {
            return null;
        }

        return $find->fetch();
    }

    public function findById(int $id, string $columns = "*")
    {
        return $this->find("id_depo = :id", "id={$id}", $columns);
    }

    public function findAll() 
    {
        $stmt = Connect::getInstance()->prepare("SELECT * FROM ".self::$entity);
        $stmt->execute();

        $testimonials = $stmt->fetchAll();
        return $testimonials;
    }

    public function save()
    {
        $depoId = $this->create(self::$entity, $this->safe());
        if ($this->fail()) {
            $this->message->error("Erro ao cadastrar novo depoimentos, verifique os dados e tente novamente.");
            return null;
        }
        // $this->data = $this->findById($depoId);
        return $this;
    }

    public function updateTestimonial(string $depoId)
    {
        $this->update(self::$entity, $this->safe(), "id_depo=:id", "id={$depoId}");
        if ($this->fail()) {
            $this->message()->error("Erro ao atualizar, tente novamente mais tarde!");
            return null;
        }

        return $this;
    }

    public function deleteTestimonial(string $depoId)
    {
        $this->delete(self::$entity, "id_depo = :id", $depoId);
        if ($this->fail()) {
            $this->message->error("Erro ao deletar depoimento!");
            return null;
        }
        $this->data = null;
        return $this;
    }
}