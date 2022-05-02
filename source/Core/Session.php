<?php

namespace Source\Core;

class Session {

    public function __construct()
    {
        if (!session_id()) {
            // session_save_path(CONF_SES_PATH);
            session_start();
        }
    }

    public function __get($name)
    {
        if($_SESSION[$name]) {
            return $_SESSION[$name];
        }

        return null;
    }

    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        

        return $this;
    }

    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    public function csrf():void
    {
        $_SESSION['csrf'] = base64_encode(random_bytes(20));
    }
    
}