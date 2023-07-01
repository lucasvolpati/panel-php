<?php
$this->layout("_template", ['title' => $this->e($title)]);
?>
<section class="system-main">
    <main class="content-view">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sistema</li>
            </ol>
        </nav>

        <div class="container-main">

            <div class="mt-2">

                <form action="" method="POST" class="border p-4 form-validate">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label"><strong>Nome da Aplicação:</strong></label>
                                <input type="text" name="name" placeholder="Nome da Aplicação" value="Peach Brasil" required class="form-control required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label"><strong>Manutenção:</strong></label>
                                <select name="maintenance" required class="form-control required">
                                    <option value="1">Ativado</option>
                                    <option value="0" selected>Desativado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label"><strong>CNPJ:</strong></label>
                        <input type="text" name="cnpj" placeholder="CNPJ" value="48498411498849" required class="form-control required cnpj-mask">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><strong>Palavras Chaves:</strong></label>
                        <textarea name="keywords" placeholder="Palavras Chaves" rows="5" class="form-control ">criação de sites, lojas virtuais, identidade visual, redes sociais, gerenciamento google adwords, administração de sites, criação, sites, redes, sociais, lojas, virtuais, virtual, google adwords, gerenciamento, administracão</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><strong>Descrição:</strong></label>
                        <textarea name="description" placeholder="Descrição" rows="5" class="form-control ">Criação de Sites, Criação de Lojas Virtuais, Criação de Sites Dinâmicos, Logomarca, Anúncio Google (Adwords), Instagram (Posts)</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
                </form>
            </div>

            <div class="cards-container mt-4 p-4 bg-white border">
                <div class="cards-view">
                    <a href="<?= url("sistema/endereco") ?>" title="Endereço">
                        <div class="card">
                            <h3 class="card-title">Endereço</h3>
                            <i class="fas fa-map-marker-alt text-danger"></i>
                        </div>
                    </a>
                    <a href="<?= url("sistema/contato") ?>" title="Contato">
                        <div class="card">
                            <h3 class="card-title">Contato</h3>
                            <i class="fas fa-phone-alt text-warning"></i>
                        </div>
                    </a>
                    <a href="<?= url("sistema/redes-sociais") ?>" title="Redes Sociais">
                        <div class="card">
                            <h3 class="card-title">Redes<br>Sociais</h3>
                            <i class="fas fa-network-wired text-primary"></i>
                        </div>
                    </a>
                    <a class="disabled" href="#" title="Loja Virtual">
                        <div class="card">
                            <h3 class="card-title">Loja<br>Virtual</h3>
                            <i class="fas fa-store text-success"></i>
                        </div>
                    </a>
                    <a href="<?= url("sistema/lgpd") ?>" title="LGPD">
                        <div class="card">
                            <h3 class="card-title">LGPD</h3>
                            <i class="fas fa-lock text-black"></i>
                        </div>
                    </a>
                    <a href="<?= url("sistema/floater") ?>" title="Floater">
                        <div class="card">
                            <h3 class="card-title">Floater</h3>
                            <i class="fas fa-exclamation-circle text-info"></i>
                        </div>
                    </a>
                    <a class="disabled" href="<?= url("sistema/ftp") ?>" title="FTP">
                        <div class="card">
                            <h3 class="card-title">FTP</h3>
                            <i class="fas fa-network-wired text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</section>