<?php
$this->layout("_template", ['title' => $this->e($title)]);
?>

<main class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/sistema") ?>">Sistema</a></li>
            <li class="breadcrumb-item active" aria-current="page">FTP</li>
        </ol>
    </nav>
    <div class="container-main">

        <div class="mt-2">
            <form action="" method="POST" class="border p-4 form-validate">
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group mb-3">
                    <label class="form-label"><strong>Situação:</strong></label>
                    <select name="active" required class="form-control required">
                        <option value="1">Ativado</option>
                        <option value="0" selected>Desativado</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label"><strong>URL:</strong></label>
                    <input type="text" name="url" placeholder="URL" value="" class="form-control ">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Servidor:</strong></label>
                            <input type="text" name="server" placeholder="Servidor" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Porta:</strong></label>
                            <input type="number" name="port" placeholder="Porta" value="0" min="0" max="65536" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Username:</strong></label>
                            <input type="text" name="username" placeholder="Username" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Senha:</strong></label>
                            <input type="text" name="password" placeholder="Senha" value="" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label"><strong>Diretório:</strong></label>
                    <input type="text" name="directory" placeholder="Diretório" value="" class="form-control ">
                </div> <br>
                <a onclick="window.location.href='<?= url() ?>/sistema'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
                <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
            </form>
        </div>
    </div>
</main>