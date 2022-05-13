<?php

namespace Source\Core;

use Source\Core\View;

class Controller {
	protected $view;

	public function __construct(string $pathToView = null) {
		$this->view = new View($pathToView);
	}
}