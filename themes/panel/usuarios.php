<?php
    $this->layout("_template", ['title' => $this->e($title)]);
?>

<main id="main-user">
    <div class="top-row border">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuários</li>
            </ol>
        </nav>

        <button class="btn btn-primary btn-new" data-bs-toggle="modal" data-bs-target="#createModal">
            Novo <i class="fas fa-plus-circle"></i>
        </button>
    </div>
    
    <div class="main-row border">
        <div class="buscar">
            <input type="text" name="seach" id="seach" placeholder="Buscar">
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Atualizado Em</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php
                        echo "
                            <tr>
                                <th scope='row'>{$user->id}</th>
                                <td>{$user->name}</td>
                                <td>{$user->email}</td>
                                <td>" . date_fmt($user->updated_at) . "</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='editar-usuario&id={$user->id}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                                    <a id='{$user->id}' class='btn btn-danger btn-sm deleteBtn' ><i class='fas fa-trash'></i></a>
                                </td>
                            </tr>
                        ";
                    ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Delete -->
<div class="modal" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseja exluir permanentemente este usuário?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a onclick="deleteAction(this)" id="deleteConfirm" data-module="usuario" type="button" class="btn btn-danger">Excluir <i id='delete' class='fas fa-trash'></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createUser" method="POST" action="<?= url('/usuario') ?>" class="row g-3" novalidate>
                    <div class="col-12">
                        <label for="inputName" class="form-label">Nome:</label>
                        <input name="name" type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">E-Mail:</label>
                        <input name="email" type="email" class="form-control" placeholder="E-Mail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Senha:</label>
                        <input name="password" type="password" class="form-control" placeholder="Senha">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="document.querySelector('#createUser').submit()">Salvar</button>
            </div>
        </div>
    </div>
</div>

<?php
    use Source\Core\Message;
    $message = new Message();

    $response = filter_input(INPUT_GET, 'user-action', FILTER_DEFAULT);

    if ($response) {
        $content = match ($response) {
            'invalid.data' => [
                    'method' => 'error',
                    'message' => 'Um ou mais campos não são válidos.'
            ],
            'created' => [
                    'method' => 'success',
                    'message' => 'Usuário adicionado com sucesso.'
            ],
            'removed' => [
                    'method' => 'success',
                    'message' => 'Usuário removido com sucesso.'
            ],
            'removed-failed' => [
                'method' => 'error',
                'message' => 'Houve um erro ao remover o usuário!'
            ]
        };

        echo $message->{$content['method']}($content['message']);
    }
?>
