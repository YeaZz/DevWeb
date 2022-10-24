<?php include("../include/config.php") ?>

<!DOCTYPE html>
<html lang="en">
    <?php include("../modules/head.php") ?>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <h1>Car fours</h1>
        <div class="images">
            <img src="<?= getImage(IMG_DIR . 'img-13') ?>" alt="Rails">
            <img src="<?= getImage(IMG_DIR . 'img-14') ?>" alt="Rails">
            <img src="<?= getImage(IMG_DIR . 'img-15') ?>" alt="Maison">
            <img src="<?= getImage(IMG_DIR . 'img-16') ?>" alt="Ciel">
            <img src="<?= getImage(IMG_DIR . 'img-17') ?>" alt="Batiment">
            <img src="<?= getImage(IMG_DIR . 'img-18') ?>" alt="Route">
        </div>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>