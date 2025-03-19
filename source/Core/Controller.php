<?php

namespace Source\Core;

use League\Plates\Engine;

abstract class Controller {
    private Engine $engine;
    protected Session $session;

    public function __construct()
    {
        $this->engine = new Engine(CONF_VIEW_PATH, CONF_VIEW_EXT);
        $this->session = new Session();
    }

    public function render(string $templateName, array $data): string
    {
        return $this->engine->render($templateName, $data);
    }
}
