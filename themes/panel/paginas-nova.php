<?php $this->layout("template") ?>

<main id="main-new-page" class="content-view">
    <div class="container-main">
        <form action="" method="POST" class="border p-4 form-validate" enctype="multipart/form-data">

            <div class="tabs">
                <ul>
                    <li class="pg active"><a>Página </a></li>
                    <li class="ct"><a>Conteúdo</a></li>
                </ul>

                <div id="sectionI" class="active">
                    <div class="page" id="tab-page">
                        <input type="hidden" name="_method" value="POST">
                        <div class="row">
                            <div class="form-group mb-3">
                                <label class="form-label"><strong>Titulo:</strong></label>
                                <input type="text" name="title" placeholder="Titulo" value="" required class="form-control required">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label"><strong>URL:</strong></label>
                                    <input type="text" name="url" placeholder="URL" value="" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label"><strong>Tags:</strong></label>
                                    <input type="text" name="tags" placeholder="Tags" value="" class="form-control ">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label"><strong>Visibilidade:</strong></label>
                                    <select name="visible" required class="form-control required">
                                        <option value="1" selected>Visível</option>
                                        <option value="0">Invisivel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label"><strong>Indexação nos mecânismos de
                                            busca:</strong></label>
                                    <select name="index_active" required class="form-control required">
                                        <option value="1" selected>Ativado</option>
                                        <option value="0">Desativado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label"><strong>Descrição:</strong></label>
                                <textarea name="description" placeholder="Descrição" rows="5" required class="form-control required"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label"><strong>LD-JSON:</strong></label>
                                <textarea name="ld_json" placeholder="LD-JSON" rows="5" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sectionII">

                    <div class="content" id="tab-content">
                        <div class="content-elements sortable bg-white">

                            <div class="card content-group mb-2 p-0 text required" draggable="true">
                                <input type="hidden" name="elements[]" value="TEXTEDITOR">

                                <div class="card-header">
                                    <button type="button" class="btn btn-sm btn-danger btn-remove-element float-end" title="Remover Elemento"><i class="fas fa-trash-alt"></i></button>
                                    <!-- <h2 class="card-title">Adicionar texto</h2> -->
                                </div>
                                <div class="card-body form-group">
                                    <div class="nosortable">
                                        <textarea name="texts[]" placeholder="Digite o seu texto aqui..." rows="5" required class="textarea-editor form-control required nosortable"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card content-group p-0 mb-2 " draggable="true">
                                <input type="hidden" name="elements[]" value="IMAGEEDITOR">

                                <div class="card-header">
                                    <!-- <h2 class="card-title">Adicionar imagem</h2><span>Até 300kb e resolução máxima 1200 x 1200 px</span> -->
                                    <button type="button" class="btn btn-sm btn-danger btn-remove-element float-end" title="Remover Elemento" data-remove=""><i class="fas fa-trash-alt"></i></button>
                                </div>
                                <div class="card-body form-group">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label"><strong>Titulo da Imagem:</strong></label>
                                            <input type="text" name="title-images[]" placeholder="Titulo da Imagem" value="" class="form-control nosortable">
                                        </div>
                                    </div>


                                    <label class="label-img" for="img51ed647893d01233c9a38c12edcf27a6">
                                        <img src="https://www.peachbrasil.com.br/public/assets/img/panel/upload.png" data-default="https://www.peachbrasil.com.br/public/assets/img/panel/upload.png" title="Selecione uma Imagem" alt="Selecione uma Imagem" class="img-fluid border">
                                    </label>

                                    <input type="file" name='images[]' accept="image/*" id="img51ed647893d01233c9a38c12edcf27a6" class="image-upload" required hidden>
                                </div>
                            </div>
                            <div class="card content-group mb-2 p-0 " draggable="true">
                                <input type="hidden" name="elements[]" value="YOUTUBEEDITOR">

                                <div class="card-header">
                                    <button type="button" class="btn btn-sm btn-danger btn-remove-element float-end" title="Remover Elemento"><i class="fas fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-sm btn-dark btn-duplicate-element float-end" title="Duplicar Elemento"><i class="fas fa-clone"></i></button>
                                    <!-- <h2 class="card-title">Adicionar vídeo do youtube</h2> -->
                                </div>
                                <div class="card-body form-group">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label"><strong>Url do Video:</strong></label>
                                            <input type="text" name="urls-video[]" placeholder="Url do Video" value="" class="form-control youtube-url-video">
                                        </div>
                                    </div>
                                    <label class="label-img">
                                        <iframe style="width: 100%;display: none;" class="" height="400" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </label>
                                </div>
                            </div>
                            <input type="hidden" name="images-notice-edit" value="">
                            <input type="hidden" name="images-remove">
                        </div>

                        <div class="row text-center mt-5 bg-white">
                            <div class="col-md-12 row">
                                <div class="col-md-4 text-center p-4 bg-primary text-white" style="cursor: pointer;" title="Clique aqui para adicionar um novo parágrafo" data-name="texts[]" data-class="text" data-title="Digite o texto do parágrafo..." data-urlajax="https://www.peachbrasil.com.br/admin/site/paginas/componente/form.texteditor">
                                    NOVO TEXTO <i class="fas fa-paragraph"></i></div>
                                <div class="col-md-4 text-center p-4 bg-success text-white" style="cursor: pointer;" title="Clique aqui para adicionar uma nova imagem" data-urlajax="https://www.peachbrasil.com.br/admin/site/paginas/componente/form.imageeditor">
                                    NOVA IMAGEM <i class="fas fa-image"></i></div>
                                <div class="col-md-4 text-center p-4 bg-danger text-white" style="cursor: pointer;" title="Clique aqui para adicionar um novo video" data-urlajax="https://www.peachbrasil.com.br/admin/site/paginas/componente/form.youtubeeditor" data-required="true">NOVO VIDEO DO YOUTUBE <i class="fas fa-video"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a onclick="window.location.href='<?= url() ?>/paginas'" class="btn btn-secondary mt-3">Voltar <i class="fas fa-reply"></i></a>
            <button type="submit" class="btn btn-danger mt-3">Salvar <i class="fas fa-save"></i></button>
        </form>
    </div>
</main>


<?php $this->start('script') ?>
<script src=<?= theme("/assets/js/new-page.js") ?>></script>
<?php $this->stop() ?>