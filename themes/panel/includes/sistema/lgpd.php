<?php
$this->layout("_template", ['title' => $this->e($title)]);
?>

<main class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/sistema") ?>">Sistema</a></li>
            <li class="breadcrumb-item active" aria-current="page">LGPD</li>
        </ol>
    </nav>
    <div class="container-main">

        <div class="mt-2">
            <form action="" method="POST" class="border p-4 form-validate" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group mb-3">
                    <label class="form-label"><strong>Situação:</strong></label>
                    <select name="active" required class="form-control required">
                        <option value="1" selected>Ativado</option>
                        <option value="0">Desativado</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label"><strong>Política de Privacidade:</strong></label>
                    <span><small>O ideal seria um arquivo de até 300kb(Se for uma imagem que seja no máximo de
                            1200x1200 de resolução)</small></span>


                    <input type="file" name="privacy_policy" accept="application/pdf" class="form-control ">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label"><strong>Termos e Condições:</strong></label>
                    <span><small>O ideal seria um arquivo de até 300kb(Se for uma imagem que seja no máximo de
                            1200x1200 de resolução)</small></span>


                    <input type="file" name="terms_conditions" accept="application/pdf" class="form-control ">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label"><strong>Política de Devolução:</strong></label>
                    <span><small>O ideal seria um arquivo de até 300kb(Se for uma imagem que seja no máximo de
                            1200x1200 de resolução)</small></span>


                    <input type="file" name="return_policy" accept="application/pdf" class="form-control ">
                </div> <br>
                <a onclick="window.location.href='<?= url() ?>/sistema'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
                <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
            </form>
        </div>
    </div>
</main>