<?php $this->layout("_template", ['title' => $this->e($title)]); ?>

<main id="main-pages">
    <div id="buscar">
        <a class="btn btn-primary" href="<?= url() ?>/nova-pagina">Novo <i class="fas fa-plus-circle"></i></a>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">URL</th>
                <th scope="col">Visível</th>
                <th scope="col">Criado Em</th>
                <th scope="col">Atualizado Em</th>
                <th scope="col"></th>
            </tr>
        </thead>



        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Página de teste</td>
                <td><a href="#">https://paginadeteste.com.br/teste <i class="fas fa-external-link-alt"></i></a></td>
                <td><i class="fas fa-check-circle visible"></i></td>
                <td>02/05/2022 16:32:47</td>
                <td>02/05/2022 16:32:47</td>
                <td>
                    <a class='btn btn-primary' href='editar-usuario&id={$users[$i]->id_user}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                    <a class='btn btn-danger' href='?id={$users[$i]->id_user}' data-bs-toggle='modal' data-bs-target='#modalDelete'><i id='delete' class='fas fa-trash'></i></a>
                </td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>Página de teste</td>
                <td><a href="#">https://paginadeteste.com.br/teste <i class="fas fa-external-link-alt"></i></a></td>
                <td><i class="fas fa-times-circle hidden"></i></td>
                <td>02/05/2022 16:32:47</td>
                <td>02/05/2022 16:32:47</td>
                <td>
                    <a class='btn btn-primary' href='editar-usuario&id={$users[$i]->id_user}'><i id='edit' class='fas fa-pencil-alt'></i></a>
                    <a class='btn btn-danger' href='?id={$users[$i]->id_user}' data-bs-toggle='modal' data-bs-target='#modalDelete'><i id='delete' class='fas fa-trash'></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</main>