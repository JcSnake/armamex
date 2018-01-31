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
            <a href="#am-nosotros" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/nosotros.svg" width="40" height="40" alt="<?=$lng['menuUs']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuUs']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-flota" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/flota.svg" width="40" height="40" alt="<?=$lng['menuFlota']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuFlota']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-terminal" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/terminal.svg" width="40" height="40" alt="<?=$lng['menuTerminal']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuTerminal']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-servicios" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/servicios.svg" width="40" height="40" alt="<?=$lng['menuServices']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuServices']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-cotizacion" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/cotizacion.svg" width="40" height="40" alt="<?=$lng['menuCotizacion']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuCotizacion']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-experiencia" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/experiencia.svg" width="40" height="40" alt="<?=$lng['menuExpirience']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuExpirience']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-clientes" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
                <div class="am-menu-icon">
                    <img src="/assets/images/nav/clientes.svg" width="40" height="40" alt="<?=$lng['menuClients']?>">
                </div>
                <div class="am-text-menu"><?=$lng['menuClients']?></div>
            </a>
        </li>
        <li class="am-menu-link">
            <a href="#am-contacto" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 100}">
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

<section id="navOffcanvas" class="uk-offcanvas uk-contrast">
    <div class="uk-offcanvas-bar">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-1-1 uk-text-center uk-margin-large-top">
                <h2><?=$lng['titleCompany']?></h2>
            </div>
        </div>
        <div class="uk-visible-small uk-text-center">
            <hr class="uk-width-4-5 uk-container-center uk-article-divider">
            <h5><?=$lng['subtitleCompany']?></h5>
        </div>
        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon">
            <li>
                <a href="#am-nosotros" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/nosotros.svg" width="30" height="30" alt="<?=$lng['menuUs']?>"></i>
                        <?=$lng['menuUs']?>
                </a>
            </li>
            <li>
                <a href="#am-flota" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/flota.svg" width="30" height="30" alt="<?=$lng['menuFlota']?>"></i>
                        <?=$lng['menuFlota']?>
                </a>
            </li>
            <li>
                <a href="#am-terminal" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/terminal.svg" width="30" height="30" alt="<?=$lng['menuTerminal']?>"></i>
                        <?=$lng['menuTerminal']?>
                </a>
            </li>
            <li>
                <a href="#am-servicios" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/servicios.svg" width="30" height="30" alt="<?=$lng['menuServices']?>"></i>
                        <?=$lng['menuServices']?>
                </a>
            </li>
            <li>
                <a href="#am-cotizacion" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/cotizacion.svg" width="30" height="30" alt="<?=$lng['menuCotizacion']?>"></i>
                        <?=$lng['menuCotizacion']?>
                </a>
            </li>
            <li>
                <a href="#am-experiencia" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/experiencia.svg" width="30" height="30" alt="<?=$lng['menuExpirience']?>"></i>
                        <?=$lng['menuExpirience']?>
                </a>
            </li>
            <li>
                <a href="#am-clientes" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/clientes.svg" width="30" height="30" alt="<?=$lng['menuClients']?>"></i>
                        <?=$lng['menuClients']?>
                </a>
            </li>
            <li>
                <a href="#am-contacto" data-uk-smooth-scroll="{offset: 50}">
                    <i><img src="/assets/images/nav/contacto.svg" width="30" height="30" alt="<?=$lng['menuContact']?>"></i>
                        <?=$lng['menuContact']?>
                </a>
            </li>
        </ul>
    </div>
    <div class="uk-text-center uk-text-contrast uk-width-1-1 uk-container-center">
        <hr class="uk-article-divider">
        <p class="am-text-footer"><?=$lng['copyright']?></p>
    </div>
</section>