<?php

namespace Source\App\Controllers;

use CoffeeCode\Router\Router;
use Source\Models\User;
use Source\Core\{
    Controller
};

class AuthController extends Controller
{
    protected Router $router;
    public function __construct($router)
    {
        parent::__construct();
        $this->router = $router;
    }
    public function home():void
    {
        echo $this->render("home", [
            "title" => "Painel CMS | Home"
        ]);

    }
    public function index(): void
    {
        echo $this->render('login', [
            'title' => 'Painel CMS | Login'
        ]);
    }

    public function attempt(array $request)
    {
        $user = User::where('email', $request['email'])->first();
        if (
            !$request['email'] ||
            !$request['password'] ||
            !is_email($request['email']) ||
            !is_passwd($request['password']) ||
            !$user
        ) {
            return $this->router->redirect('login.index', [
                'login.failed' => 'invalid.credentials'
            ]);
        }

        $this->session->set('login', $user->email);
        return $this->router->redirect('panel.home');
    }
    public function logout(): string
    {
        $this->session->destroy();
        return $this->router->redirect('login.index');
    }

}
