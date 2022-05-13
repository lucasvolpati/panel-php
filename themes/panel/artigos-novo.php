<?php
    $v->layout('template')
?>

<?php $v->start('css') ?>
    <link rel="stylesheet" href="<?= theme("/assets/dist/ui/trumbowyg.min.css") ?>">
<?php $v->stop() ?>

<main class="content-view-articles">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= url("/") ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= url("/artigos") ?>">Artigos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Novo Artigo</li>
        </ol>
    </nav>
    <div class="container-main">
                        <?php

                            use Source\Models\Article;
                            use Source\Support\Upload;

                            $upload = new Upload();

                            $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

                            if ($data) {
                                $u = $upload->image($_FILES['image'], "image", $width = 500);

                                if (!$u) {
                                    echo $upload->message();
                                }

                                

                                $article = new Article();

                                $article->bootstrap(
                                    $u,
                                    $data['title'],
                                    $data['tags'],
                                    $data['category'],
                                    $data['visibility'],
                                    $data['comments'],
                                    $data['content']
                                );

                                if (!$article->save()) {
                                    echo $article->fail();
                                    return null;
                                }
                        
                                echo $article->message()->success("Artigo cadastrado com sucesso.");
                            }
                        ?>
        <form action="" method="post" class="border p-4 form-validate" enctype="multipart/form-data" novalidate>

            <div class="tabs">
                <div class="row">
                    <div class="form-group mb-3">
                        
                        <label class="form-label"><strong>Capa:</strong></label>
                        <span><small>O ideal seria uma imagem de até 300kb que tenha no máximo 1920 x 1080 de resolução</small></span>


                        <input type="file" name="image" class="form-control required">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label"><strong>Titulo:</strong></label>
                        <input type="text" name="title" placeholder="Titulo" class="form-control required">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Tags:</strong></label>
                            <input type="text" name="tags" placeholder="Tags" value="" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Categoria:</strong></label>
                            <select class="form-select" name="category" aria-label="Default select example">
                                <option value="Categoria 0" selected>Categoria 1</option>
                                <option value="Categoria 1">Categoria 2</option>
                                <option value="Categoria 2">Categoria 3</option>
                                <option value="Categoria 3">Categoria 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Visibilidade:</strong></label>
                            <select name="visibility" class="form-control required">
                                <option value="1" selected>Visível</option>
                                <option value="0">Invisivel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label class="form-label"><strong>Comentários:</strong></label>
                            <select name="comments" class="form-control required">
                                <option value="1" selected>Ativado</option>
                                <option value="0">Desativado</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label"><strong>Conteúdo:</strong></label>
                        <textarea id="trumbowyg-content" name="content" placeholder="Conteúdo" rows="10" class="form-control required"></textarea>
                    </div>
                </div>
            </div>
            <a onclick="window.location.href='<?= url() ?>/artigos'" class="btn btn-secondary">Voltar <i class="fas fa-reply"></i></a>
            <button type="submit" class="btn btn-success">Salvar <i class="fas fa-save"></i></button>
        </form>
    </div>
</main>

<?php $v->start('script') ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src=<?= theme("/assets/js/new-blog.js") ?>></script>
    <script src="<?= theme("/assets/dist/trumbowyg.min.js") ?>"></script>
    <script src="<?= theme("/assets/dist/plugins/upload/trumbowyg.upload.min.js") ?>"></script>

    <script>
        $('#trumbowyg-content').trumbowyg({
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['upload'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            plugins: {
                // Add imagur parameters to upload plugin for demo purposes
                upload: {
                    serverPath: 'https://api.imgur.com/3/image',
                    fileFieldName: 'image',
                    headers: {
                        'Authorization': 'Client-ID xxxxxxxxxxxx'
                    },
                    urlPropertyName: 'data.link'
                }
            },
            autogrow: true
        });
    </script>
<?php $v->stop() ?>

