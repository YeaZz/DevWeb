<?php
session_start();
include("../include/config.php")
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("../modules/head.php") ?>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <h1>Y quéa</h1>
        <div class="images">
            <img src="<?= getImage('img-7') ?>" alt="Pont">
            <img src="<?= getImage('img-8') ?>" alt="Fleuve">
            <img src="<?= getImage('img-9') ?>" alt="Pont">
            <img src="<?= getImage('img-10') ?>" alt="Coeur">
            <img src="<?= getImage('img-11') ?>" alt="Status">
            <img src="<?= getImage('img-12') ?>" alt="Stop">
        </div>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>