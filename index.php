<?php

require_once('assets/lang/es/init.php');

?>
<!Doctype html>
<html lang="<?=$lng['code']?>" dir="<?=$lng['dir']?>" class="uk-touch">
<head>
    <title><?=$lng['title']?></title>
    <?php require_once('template/head.php'); ?>
</head>
<body>

    <?php require_once('template/nav.php'); ?>

    <div class="home-bg">
    </div>

    <?php
        include_once('nosotros.php');
        include_once('flota.php');
        include_once('terminal.php');
    ?>

    <?php require_once('template/footer.php'); ?>

</body>
</html>