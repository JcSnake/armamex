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

    <div class="am-bgcolor uk-width-1-1 uk-height-1-1">

        <div class="am-head-category uk-flex uk-flex-center">
            <?=$lng['flota']?>
        </div>
        <div class="uk-flex uk-flex-center am-buque-tanque-block">
            <div class="am-head-im-ship">
                <img src="assets/images/ship.svg" width="700" height="700">
                    <div class="am-title-flota-buque">
                        Buque Tanques
                    </div>
                    <div class="am-places-buque">
                        <p> Cerro del Tepeyac </p>
                        <br>
                        <p> Cerro de la Estrella </p>
                        <br>
                        <p> Citlatepetl II </p>
                        <br>
                    </div>
                    <div class="am-quantity-buque">
                        <p> 10,000 TMP </p>
                        <br>
                        <p> 5,400 TMP </p>
                        <br>
                        <p> 6,200 TMP </p>
                        <br>
                    </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-center am-barcazas-tanque-block">
            <div class="am-head-im-ship">
                <img src="assets/images/ship.svg" width="700" height="700">
                    <div class="am-title-flota-buque">
                        Barcazas Tanque
                    </div>
                    <div class="am-places-buque">
                        <p> Navar 2001 </p>
                        <br>
                        <p> Navar 2301 </p>
                    </div>
                    <div class="am-quantity-buque">
                        <p> 13,000 BLLS </p>
                        <br>
                        <p> 20,000 BLLS </p>
                    </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-center am-buques-abs-block">
            <div class="am-head-im-ship">
                <img src="assets/images/ship.svg" width="700" height="700">
                    <div class="am-title-buques-abs">
                        Buques Abastecedores
                    </div>
                    <div class="am-places-buque">
                        <p> Cerro el Centinela </p>
                        <br>
                        <p> Cerro del Bernal </p>
                    </div>
                    <div class="am-quantity-buque">
                        <p> 120 TPF </p>
                        <br>
                        <p> 45 TPF </p>
                    </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-center am-dique-flot-block">
            <div class="am-head-im-ship">
                <img src="assets/images/ship.svg" width="700" height="700">
                    <div class="am-title-dique-flot">
                        Dique Flotante
                    </div>
                    <div class="am-places-buque">
                        <p> Popocatepetl II </p>
                        <br>
                        <p>&nbsp&nbsp Buque Huesped </p>
                        <p>&nbsp&nbsp Manga </p>
                        <p>&nbsp&nbsp Eslora </p>
                    </div>
                    <div class="am-quantity-buque">
                        <p> 1800 TPM </p>
                    </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-center am-buque-oceano-block">
            <div class="am-head-im-ship">
                <img src="assets/images/ship.svg" width="700" height="700">
                    <div class="am-title-buque-oceano">
                        Buque Oceanográfico
                    </div>
                    <div class="am-places-buque">
                        <p> Dr. Jorge Carranza Fraser 
                            (Operadores)
                        </p>
                            
                    </div>
                    <div class="am-quantity-buque">
                        <p> 1800 TPM </p>
                    </div>
            </div>
        </div>
    </div>

    <?php require_once('template/footer.php'); ?>

</body>
</html>