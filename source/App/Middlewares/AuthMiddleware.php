<?php

namespace Source\App\Middlewares;

use CoffeeCode\Router\Router;
use Source\Core\Session;
class AuthMiddleware
{
    public function handle(Router $router): bool
    {
        if ((new Session())->login) {
            return true;
        }

        return $router->redirect('login.index');
    }
}
