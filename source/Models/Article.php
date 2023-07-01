<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Core\Connect;

class Article  extends Model
{
    protected static $entity = "articles";

    protected static $safe = ["id", "created_at", "updated_at"];

    public function bootstrap(string $image, string $title, string $tags, string $category, int $visibility, int $comments, string $content)
    {
        $this->image = $image;
        $this->title = $title;
        $this->tags = $tags;
        $this->category = $category;
        $this->visibility = $visibility;
        $this->comments = $comments;
        $this->content = $content;

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
        return $this->find("id_article = :id", "id={$id}", $columns);
    }

    public function findAll() 
    {
        $stmt = Connect::getInstance()->prepare("SELECT * FROM ".self::$entity);
        $stmt->execute();

        $articles = $stmt->fetchAll();

        return $articles;
    }

    public function save()
    {
        $this->create(self::$entity, $this->safe());
        if ($this->fail()) {
            $this->message->error("Erro ao cadastrar novo artigo, verifique os dados e tente novamente.");
            return null;
        }

        return $this;
    }
}