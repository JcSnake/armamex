<section class="uk-block uk-text-center uk-contrast">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-4">
            <img src="/assets/images/nav/logo-armamex.svg" width="100" height="100" alt="Armamex">
        </div>
        <div class="uk-width-1-2">
            <h1><?=$lng['titleCompany']?></h1>
            <hr class="uk-width-1-1 uk-article-divider uk-hidden-small">
            <h2 class="uk-hidden-small"><?=$lng['subtitleCompany']?></h2>
        </div>
        <div class="uk-width-1-4">
            <img src="/assets/images/nav/ISM_claro.png" width="100" height="100" alt="ISM">
        </div>
    </div>
    <div class="uk-visible-small">
        <hr class="uk-width-4-5 uk-container-center uk-article-divider">
        <h2><?=$lng['subtitleCompany']?></h2>
    </div>
</section>

<nav class="uk-navbar uk-hidden-small uk-text-center" data-uk-sticky>
    <ul class="uk-flex uk-flex-center uk-navbar-nav">
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/nosotros.svg" width="40" height="40" alt="<?=$lng['menuUs']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuUs']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/flota.svg" width="40" height="40" alt="<?=$lng['menuFlota']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuFlota']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/terminal.svg" width="40" height="40" alt="<?=$lng['menuTerminal']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuTerminal']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/servicios.svg" width="40" height="40" alt="<?=$lng['menuServices']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuServices']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/cotizacion.svg" width="40" height="40" alt="<?=$lng['menuCotizacion']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuCotizacion']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/experiencia.svg" width="40" height="40" alt="<?=$lng['menuExpirience']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuExpirience']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/clientes.svg" width="40" height="40" alt="<?=$lng['menuClients']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuClients']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#" class="uk-navbar-nav-subtitle">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/contacto.svg" width="40" height="40" alt="<?=$lng['menuContact']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuContact']?></div>
            </a>
        </li>
    </ul>
</nav>

<nav class="uk-navbar uk-width-1-1 uk-visible-small" data-uk-sticky>
    <a href="#navOffcanvas" class="uk-navbar-toggle" data-uk-offcanvas="{mode:'reveal'}"></a>
</nav>

<section id="navOffcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">

    </div>
</section>