<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main>
        <h1>Page de contact</h1>
        <form action="treatment/form.php" method="post">
            <div>
                <label for="subject">Sujet du message</label>
                <input id="subject" type="text" name="subject" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="mail" required>
            </div>
            <div>
                <label for="full_name">Nom & prénom</label>
                <input id="full_name" type="text" name="full_name" required>
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

    <script src="js/script.js"></script>
</body>
</html>