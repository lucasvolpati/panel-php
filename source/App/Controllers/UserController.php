<?php

namespace Source\App\Controllers;

use CoffeeCode\Router\Router;
use Source\Core\Controller;
use Source\Models\User;

class UserController extends Controller
{
    protected Router $router;
    public function __construct($router)
    {
        parent::__construct();
        $this->router = $router;
    }
    public function index():void
    {
        $users = User::all();

        echo $this->render("usuarios", [
            "title" => "Painel CMS | Usuários",
            "users" => $users
        ]);
    }

    public function update(array $request):void
    {
//        var_dump($request);exit();
        echo $this->render("usuarios-editar", [
            "title" => "CMS | Editar Usuário"
        ]);
    }

    public function create(array $request):void
    {
        $validated = [
            'name' => htmlspecialchars($request['name'], ENT_QUOTES, 'UTF-8'),
            'email' => filter_var($request['email'], FILTER_SANITIZE_EMAIL),
            'password' => htmlspecialchars($request['password'], ENT_QUOTES, 'UTF-8'),
        ];

        if (in_array(false, $validated)) {
            $this->router->redirect('panel.users', [
                'user-action' => 'invalid.data'
            ]);
        }

        User::create($validated);

        $this->router->redirect('panel.users', [
            'user-action' => 'created'
        ]);
    }

    public function remove(array $request):void
    {
        $user = User::find($request['id']);

        if ($user->delete()) {
            $this->router->redirect('panel.users', [
                'user-action' => 'removed'
            ]);
        }

        $this->router->redirect('panel.users', [
            'user-action' => 'removed-failed'
        ]);

    }
}