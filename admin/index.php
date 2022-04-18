<!DOCTYPE html>
<html lang="pt-br">
<?php


require_once __DIR__ . "/../vendor/autoload.php";

use Source\Core\Session;
use Source\Models\User;

$session = new Session();

if (!$session->login) {
    header('location:../index.php');
}

$user = (new User())->findNameByEmail($session->login);

$users = (new User())->findAll();

// for ($i=0; $i < count($users) ; $i++) { 
//     var_dump($users[$i]->id_user);
// }

// var_dump(count($users));

//Include Head
require_once __DIR__ . "/../includes/head.php";

?>
<body>

    <?php
        require_once __DIR__ . "/../includes/menu.php";
    ?>

    <!-- CONTEUDO PRINCIPAL -->

    <main id="main">
            
            <!-- GERAL -->    
            <section id="geral">
                <div class="head">
                    <h2>Geral</h2>
                </div>
        
                <div class="content">
                    <a href="<?= CONF_URL_BASE . "/admin/usuarios"?>" class="usu">
                        <h3><?= count($users)?></h3>
                        
                        <div class="subtitle">
                            <i class="fas fa-users"></i>
                            <span>usuários</span>
                        </div>
                    </a>
                </div>
            </section>
        
        
            <!-- SITE -->
            <section id="site">
                <div class="head">
                    <h2>Site</h2>
                </div>
        
                <div class="content">
                    <a href="" class="paginas">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-file"></i>
                            <span>páginas</span>
                        </div>
                    </a>
        
                    <a href="" class="categorias">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-tag"></i>
                            <span>categorias</span>
                        </div>
                    </a>

                    <a href="" class="depoimentos">
                        <h3>0</h3>

                        <div class="subtitle">
                        <i class="fas fa-quote-right"></i>
                            <span>depoimentos</span>
                        </div>
                    </a>
                </div>
            </section>
        
        
            <!-- BLOG -->
            <section id="blog">
                <div class="head">
                    <h2>Blog</h2>
                </div>
        
                <div class="content">
                    <a href="" class="artigos">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-newspaper"></i>
                            <span>artigos</span>
                        </div>
                    </a>
        
                    <a href="" class="comentario">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-comments"></i>
                            <span>comentários</span>
                        </div>
                    </a>
                </div>
            </section>
        
        
            <!-- CONFIGURAÇÔES -->
            <section id="configuracao">
                <div class="head">
                    <h2>Configurações</h2>
                </div>
        
                <div class="content">
                    <a href="" class="funcao">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-sitemap"></i>
                            <span>funções</span>
                        </div>
                    </a>
        
                    <a href="" class="perm">
                        <h3>0</h3>

                        <div class="subtitle">
                            <i class="fas fa-lock"></i>
                            <span>permissões</span>
                        </div>
                    </a>
                </div>
            </section>
    </main>

    <?php
        require_once __DIR__ . "/../includes/footer.php";
    ?>
    
</body>
</html>