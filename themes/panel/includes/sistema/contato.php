<?php
$this->layout("_template", ['title' => $this->e($title)]);
?>

<main class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/sistema") ?>">Sistema</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contato</li>
        </ol>
    </nav>
    <div class="container-main">

        <div class="mt-2">
            <form action="" method="POST" class="border p-4 form-validate">
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group mb-3">
                    <label class="form-label"><strong>E-Mail:</strong></label>
                    <input type="email" name="email" placeholder="E-Mail" value="joivan@peachbrasil.com.br" class="form-control ">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Telefone:</strong></label>
                            <input type="text" name="telephone" placeholder="Telefone" value="1129367900" class="form-control phone-mask">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Celular:</strong></label>
                            <input type="text" name="cell" placeholder="Celular" value="" class="form-control cell-mask">
                        </div>
                    </div>
                </div>
                <br>
                <a onclick="window.location.href='<?= url() ?>/sistema'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
                <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
            </form>
        </div>
    </div>
</main>