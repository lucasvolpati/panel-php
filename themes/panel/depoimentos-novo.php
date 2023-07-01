<?php
$this->layout("_template", ['title' => $this->e($title)]);
?>

<main id="main-testimonials" class="content-view">
    <?php

    use Source\Models\Testimonials;

    $data = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

    if (key_exists("name", $data)) {

        $depo = new Testimonials(1);
        $depo->bootstrap($data['name'], $data['email'], $data['testimonial'], $data['visibility']);

        // if (!$depo->save()) {
        //     echo $depo->fail();
        //     return null;
        // }

        echo $depo->save();
        //echo $depo->message()->success("Depoimento cadastrado com sucesso.");
    }

    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= url("/depoimentos") ?>">Depoimentos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Novo Depoimento</li>
        </ol>
    </nav>
    <div class="container-main">
        <form action="" method="GET" class="border p-4 form-validate">

            <!-- <input type="hidden" name="_method" value="POST"> -->
            <div class="form-group mb-3">
                <label class="form-label"><strong>Nome:</strong></label>
                <input type="text" name="name" placeholder="Nome" required class="form-control required">
            </div>
            <div class="form-group mb-3">
                <label class="form-label"><strong>Email:</strong></label>
                <input type="text" name="email" placeholder="E-mail" required class="form-control required">
            </div>
            <div class="form-group mb-3">
                <label class="form-label"><strong>Mensagem:</strong></label>
                <textarea name="testimonial" placeholder="Descrição" maxlength="255" width="255ch" rows="5" required class="form-control required"></textarea>
            </div>
            <div class="form-group mb-3">
                <label class="form-label"><strong>Visibilidade:</strong></label>
                <select name="visibility" required class="form-control required" data-noniceselect>
                    <option value="1">Visível</option>
                    <option value="0" selected>Invisivel</option>
                </select>
            </div>
            <a onclick="window.location.href='<?= url() ?>/depoimentos'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
            <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
        </form>
    </div>
</main>