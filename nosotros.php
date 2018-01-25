<?php

require_once('assets/lang/es/init.php');

?>
<!Doctype html>
<html>
<head>
    <title><?=$lng['title']?></title>
    <?php require_once('template/head.php'); ?>
</head>
<body>

    <?php require_once('template/nav.php'); ?>

    <div class="am-bgcolor uk-width-1-1 uk-hidden-small">
        <div class="am-head-category uk-flex uk-flex-center uk-width-1-1 uk-hidden-small">
            <?=$lng['nosotros']?>
        </div>
        <div class="uk-flex uk-flex-center uk-width-1-1 uk-hidden-small">
            <img src="assets/images/nosotros_page.svg" width="450" height="450">
            <div class="am-flota-text am-text-exp-mar">
                <p> 20 Buques<br>
                    operados
                </p>
            </div>
            <div class="am-ExpInt-text am-text-exp-mar">
                <p> Clientela<br>
                    Internacional
                </p>
            </div>
            <div class="am-trip-text am-text-exp-mar">
                <p> Tripulantes<br>
                    Preparados
                </p>
            </div>
            <div class="am-termMat-text am-text-exp-mar">
                <p> Terminal Marítima<br>
                    18 Hectáreas
                </p>
            </div>
        </div>
    </div>

    <div class="am-bgcolor uk-width-1-1 uk-visible-small">
        <div class="am-head-category-small uk-flex uk-flex-center uk-width-1-1 uk-visible-small">
            <?=$lng['nosotros']?>
        </div>
    </div>

    <?php require_once('template/footer.php'); ?>

</body>
</html>