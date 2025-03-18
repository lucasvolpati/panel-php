<?php

namespace Source\Models;

use Source\Core\Database;
use Illuminate\Database\Eloquent\Model;
use Source\Core\Message;

class Base extends Model
{
    /** @var Message|null */
    public ?Message $message;

    public function __construct()
    {
        Database::connect();
        $this->message = new Message();
    }

    /**
     * @return Message|null
     */
    public function message(): ?Message
    {
        return $this->message;
    }
}