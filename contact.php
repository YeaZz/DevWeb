<?php

session_start();
if (!isset($_SESSION["firstname"]))
    header("Location: ../login.php");

?>

<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main>
        <h1>Page de contact</h1>
        <form action="treatment/contact.php" method="post">
            <div>
                <label for="subject">Sujet du message</label>
                <input id="subject" type="text" name="subject" required>
            </div>
            <div id="message">
                <label>Message</label>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit">
                <p>Envoyer</p>
                <i class="icon-arrow-right"></i>
            </button>
        </form>
    </main>

    <?php include("modules/footer.php"); ?>

</body>
</html>