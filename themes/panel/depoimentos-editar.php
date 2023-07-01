<?php

use Source\Models\Testimonials;

$this->layout('template');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

$depo = new Testimonials();
$testimonial = $depo->findById($id);

if ($id) {
    $depo->id_depo = $id;
}

?>

<main id="main-testimonials" class="content-view">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= url("/depoimentos") ?>">Depoimentos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Depoimento</li>
        </ol>
    </nav>
    <div class="container-main">
        <form action="" method="get" class="border p-4 form-validate">

            <input type="hidden" name="email" value="<?= $testimonial->email ?>">
            <div class="form-group mb-3">
                <label class="form-label"><strong>Nome:</strong></label>
                <input type="text" name="name" placeholder="Nome" value="<?= $testimonial->name ?>" required class="form-control required">
            </div>
            <div class="form-group mb-3">
                <label class="form-label"><strong>Depoimento:</strong></label>
                <textarea name="testimonial" placeholder="Depoimento" rows="5" required class="form-control required"><?= $testimonial->testimonial ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label class="form-label"><strong>Visibilidade:</strong></label>
                <select name="visibility" required class="form-control required" data-noniceselect>
                    <option value="1" <?= ($testimonial->visibility == 1 ? "selected" : "") ?>>Visível</option>
                    <option value="0" <?= ($testimonial->visibility == 1 ? "" : "selected") ?>>Invisivel</option>
                </select>
            </div>
            <a onclick="window.location.href='<?= url() ?>/depoimentos'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
            <button type="submit" class="btn btn-success">Atualizar <i class="fas fa-save"></i></button>

            <?php
            $data = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

            if (key_exists("name", $data)) {

                $depo->bootstrap($data['name'], $data['email'], $data['testimonial'], $data['visibility']);

                if (!$depo->updateTestimonial($depo->id_depo)) {
                    echo $depo->message() . $depo->fail();
                    return null;
                }

                echo $depo->message()->success("Depoimento atualizado com sucesso!");
            }

            ?>
        </form>
    </div>
</main>