<?php
$this->layout('template')
?>

<main class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="<?= url("/sistema") ?>">Sistema</a></li>
            <li class="breadcrumb-item active" aria-current="page">Endereço</li>
        </ol>
    </nav>
    <div class="container-main">

        <div class="mt-2">
            <form action="" method="POST" class="border p-4 form-validate">
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group mb-3">
                    <label class="form-label"><strong>CEP:</strong></label>
                    <input type="text" name="postal_code" placeholder="CEP" value="04134090" required class="form-control required cep-mask postal-code-search">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Logradouro:</strong></label>
                            <input type="text" name="street" placeholder="Logradouro" value="Rua Dom Antônio Barreiros" required class="form-control required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Número:</strong></label>
                            <input type="text" name="number" placeholder="Número" value="167" required class="form-control required">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label"><strong>Bairro:</strong></label>
                    <input type="text" name="district" placeholder="Bairro" value="Vila Gumercindo" required class="form-control required">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Cidade:</strong></label>
                            <input type="text" name="city" placeholder="Cidade" value="São Paulo" required class="form-control required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Estado:</strong></label>
                            <select name="state" required class="form-control required">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP" selected>São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Latitude:</strong></label>
                            <input type="text" name="latitude" placeholder="Latitude" value="-23.60773775177359" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Longitude:</strong></label>
                            <input type="text" name="longitude" placeholder="Longitude" value="-23.60773775177359" class="form-control ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label"><strong>Complemento:</strong></label>
                    <textarea name="complement" placeholder="Complemento" rows="5" class="form-control "></textarea>
                </div> <br>
                <a onclick="window.location.href='<?= url() ?>/sistema'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
                <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
            </form>
        </div>
    </div>
</main>