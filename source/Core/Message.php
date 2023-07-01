<?php

namespace Source\Core;

class Message {
    private $text;
    private $type;

    private $debug;
    private $debugMessage;

    public function __construct(int $debug = 0, string $fail = null)
    {
        $this->debug = $debug;
        $this->debugMessage = $fail;
    }

    public function __toString()
    {
        return $this->render();
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function info(String $message): Message 
    {
        $this->type = CONF_MESSAGE_INFO;
        $this->text = $this->debug == 0 ? $this->filter($message) : $this->debugMessage; 
        return $this;
    }

    public function success(String $message): Message 
    {
        $this->type = CONF_MESSAGE_SUCCESS;
        $this->text = $this->debug == 0 ? $this->filter($message) : $this->debugMessage; 
        return $this;
    }

    public function warning(String $message): Message 
    {
        $this->type = CONF_MESSAGE_WARNING;
        $this->text = $this->debug == 0 ? $this->filter($message) : $this->debugMessage; 
        return $this;
    }

    public function error(String $message): Message 
    {
        $this->type = CONF_MESSAGE_ERROR;
        $this->text = $this->debug == 0 ? $this->filter($message) : $this->debugMessage; 
        return $this;
    }

    public function render() {
        return "<div class='" . CONF_MESSAGE_CLASS . " {$this->getType()}'>{$this->getText()}</div>";
    }

     /**
     * @return string
     */
    public function json(): string
    {
        return json_encode(["error" => $this->getText()]);
    }

    /**
     * Set flash Session Key
     */
    // public function flash(): void
    // {
    //     (new Session())->set("flash", $this);
    // }

    /**
     * @param string $message
     * @return string
     */
    private function filter(string $message): string
    {
        return filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
}