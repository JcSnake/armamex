<?php

require_once('assets/lang/es/init.php');

?>
<!Doctype html>
<html lang="<?=$lng['code']?>" dir="<?=$lng['dir']?>" class="uk-touch">
<head>
    <title><?=$lng['title']?></title>
    <?php require_once('template/head.php'); ?>
</head>
<body id="am-top">

    <?php require_once('template/nav.php'); ?>

    <div id="am-top-button" class="uk-border-circle uk-hidden">
        <h1 class="uk-icon-chevron-up"></h1>
    </div>
    
    <section id="am-slider uk-padding-remove">
        <div class="uk-slidenav-position uk-hidden-small" data-uk-slideshow="{animation: 'scale', kenburns: true, autoplay: true, autoplayInterval: 3000, pauseOnHover: false}">
            <ul class="uk-slideshow uk-overlay-active">
                <li>
                    <img src="/assets/images/slider/slide01.jpg" width="2700" height="900" alt="Slide 01">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-slide-top uk-flex uk-flex-center uk-flex-middle">
                        <h1 class="uk-text-center"><?=$lng['slider01Txt']?></h1>
                    </div>
                </li>
                <li>
                    <img src="/assets/images/slider/slide02.jpg" width="2700" height="900" alt="Slide 02">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-slide-top uk-flex uk-flex-center uk-flex-middle">
                        <h1 class="uk-text-center"><?=$lng['slider02Txt']?></h1>
                    </div>
                </li>
                <li>
                    <img src="/assets/images/slider/slide03.jpg" width="2700" height="900" alt="Slide 03">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-slide-top uk-flex uk-flex-center uk-flex-middle">
                        <h1 class="uk-text-center"><?=$lng['slider03Txt']?></h1>
                    </div>
                </li>
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <li data-uk-slideshow-item="0"><a href=""></a></li>
                <li data-uk-slideshow-item="1"><a href=""></a></li>
                <li data-uk-slideshow-item="2"><a href=""></a></li>
            </ul>
        </div>
        <div class="uk-slidenav-position uk-visible-small" data-uk-slideshow="{animation: 'scale', kenburns: true, autoplay: true, autoplayInterval: 3000, pauseOnHover: false}">
            <ul class="uk-slideshow uk-overlay-active">
                <li>
                    <img src="/assets/images/slider/slide01-sm.jpg" width="320" height="480" alt="Slide 01">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-top uk-overlay-slide-top">
                        <h3 class="uk-text-center"><?=$lng['slider01Txt']?></h3>
                    </div>
                </li>
                <li>
                    <img src="/assets/images/slider/slide02-sm.jpg" width="320" height="480" alt="Slide 02">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-top uk-overlay-slide-top">
                        <h3 class="uk-text-center"><?=$lng['slider02Txt']?></h3>
                    </div>
                </li>
                <li>
                    <img src="/assets/images/slider/slide03-sm.jpg" width="320" height="480" alt="Slide 03">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-top uk-overlay-slide-top">
                        <h3 class="uk-text-center"><?=$lng['slider03Txt']?></h3>
                    </div>
                </li>
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <li data-uk-slideshow-item="0"><a href=""></a></li>
                <li data-uk-slideshow-item="1"><a href=""></a></li>
                <li data-uk-slideshow-item="2"><a href=""></a></li>
            </ul>
        </div>
    </section>

    <div class="am-sections-container">
    <?php
        include_once('nosotros.php');
        include_once('flota.php');
        include_once('terminal.php');
        include_once('servicios.php');
        include_once('cotizacion.php');
        include_once('experiencia.php');
        include_once('clientes.php');
        include_once('contacto.php');
    ?>
    </div>

    <?php require_once('template/footer.php'); ?>

</body>
</html>