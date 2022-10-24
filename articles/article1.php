<?php include("../include/config.php") ?>

<!DOCTYPE html>
<html lang="en">
    <?php include("../modules/head.php") ?>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <h1>Cuisine et là</h1>
        <div class="images">
            <img src="<?= getImage(IMG_DIR . 'img-1') ?>" alt="Pont">
            <img src="<?= getImage(IMG_DIR . 'img-2') ?>" alt="Phare">
            <img src="<?= getImage(IMG_DIR . 'img-3') ?>" alt="Pont">
            <img src="<?= getImage(IMG_DIR . 'img-4') ?>" alt="Train">
            <img src="<?= getImage(IMG_DIR . 'img-5') ?>" alt="Ville">
            <img src="<?= getImage(IMG_DIR . 'img-6') ?>" alt="Route">
        </div>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>