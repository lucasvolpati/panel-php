<!-- MENU DE NAVEGAÇÃO -->
<nav id="nav">
        <div id="head">
            <h3 id="user" name="user"><?= $user->name?></h3>
            <h3 id="useremail" name="useremail"><?= $user->email?></h3>
        </div>

        <a href="<?= CONF_URL_BASE . "/admin" ?>"><i class="fas fa-home"></i> <span>Início</span></a>
        <a href="<?= CONF_URL_BASE . "/admin/usuarios" ?>"><i class="fas fa-users"></i> <span>Usuários</span></a>

        <p>Site</p>

        <a href=<?= CONF_URL_BASE . "/admin/paginas" ?>><i class="fas fa-file"></i> <span>Páginas</span></a>
        <a class="disabled"><i class="fas fa-users"></i> <span>Clientes</span></a>
        <a href=""><i class="fas fa-tag"></i> <span>Categorias</span></a>
        <a class="disabled"><i class="fas fa-image"></i> <span>Carrossel</span></a>
        <a class="disabled"><i class="fas fa-images"></i> <span>Banners</span></a>
        <a class="disabled"><i class="fas fa-handshake"></i> <span>Parceiros</span></a>
        <a class="disabled"><i class="fas fa-camera-retro"></i> <span>Galerias</span></a>
        <a class="disabled"><i class="fas fa-smile"></i> <span>Depoimentos</span></a>

        <p>Loja Virtual</p>

        <a class="disabled"><i class="fas fa-box"></i> <span>Produtos</span></a>
        <a class="disabled"><i class="fas fa-star"></i> <span>Avaliações</span></a>
        <a class="disabled"><i class="fas fa-clipboard-list"></i> <span>Pedidos</span></a>
        <a class="disabled"><i class="fas fa-ticket-alt"></i> <span>Cupons</span></a>

        <p>Blog/Notícias</p>

        <a href=""><i class="fas fa-newspaper"></i> <span>Artigos</span></a>
        <a href=""><i class="fas fa-comments"></i> <span>Comentários</span></a>

        <p>Configurações</p>

        <a href=""><i class="fas fa-cog"></i> <span>Sistema</span></a>
        <a href=""><i class="fas fa-sitemap"></i> <span>Funções</span></a>
        <a href=""><i class="fas fa-lock"></i> <span>Permissões</span></a>
        <a href=<?= CONF_URL_BASE . "/exit.php"?>><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a>
    </nav>

    <!-- SUB-MENU DE NAVEGAÇÃO -->
    <div id="sub-nav">
        <div class="hang-container">
            <label id="hang">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <p style="margin-left: 20px; font-weight: bold;">Painel Peach Brasil</p>
        </div>

        <div class="user-container">
            <h3 id="username" name="username"><i class="fas fa-user"></i><?= $user->name?><i class="fas fa-caret-down"></i></h3>

            <a href=<?= CONF_URL_BASE . "/exit.php"?> class="exit"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
    </div>