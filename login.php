<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main style="margin: 9em 0;">
        <h1>Formulaire de connexion</h1>  
        <form action="treatment/login.php" method="POST">
            <div>
                <label for="id">Email</label>
                <input id="email" name="email" type="text" required autofocus>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input id="password" name="password" type="password" required>
            </div>
            <label><input type="checkbox" value="remember-me"> Se souvenir de moi</label>
            <button type="submit">
                <p>Connexion</p>
                <i class="icon-arrow-right"></i>
            </button>
        </form>
    </main>

    <?php include("modules/footer.php"); ?>

</body>
</html>