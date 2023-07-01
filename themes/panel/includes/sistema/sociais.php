<?php
$this->layout('template')
?>

<main class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/sistema") ?>">Sistema</a></li>
            <li class="breadcrumb-item active" aria-current="page">Redes Sociais</li>
        </ol>
    </nav>
    <div class="container-main">

        <div class="mt-2">
            <form action="https://www.peachbrasil.com.br/admin/configuracoes/sistema/redes-sociais/salvar" method="POST" class="border p-4 form-validate">
                <input type="hidden" name="_method" value="PUT">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Facebook:</strong></label>
                            <input type="url" name="facebook" placeholder="Facebook" value="https://www.facebook.com/peachbrasil" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Instagram:</strong></label>
                            <input type="url" name="instagram" placeholder="Instagram" value="https://www.instagram.com/peachbrasil" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Twitter:</strong></label>
                            <input type="url" name="twitter" placeholder="Twitter" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Linkedin:</strong></label>
                            <input type="url" name="linkedin" placeholder="Linkedin" value="" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Youtube:</strong></label>
                            <input type="url" name="youtube" placeholder="Youtube" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Twitch:</strong></label>
                            <input type="url" name="twitch" placeholder="Twitch" value="" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Discord:</strong></label>
                            <input type="url" name="discord" placeholder="Discord" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>WhatsApp:</strong></label>
                            <input type="text" name="whatsapp" placeholder="WhatsApp" value="" class="form-control cell-mask">
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