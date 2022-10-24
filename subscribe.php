<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main>
    <h1>Abonnez-vous</h1>
        <form method="post">
            <div>
                <p>Email</p>
                <input type="email" name="mail" required>
            </div>
            <div>
                <p>Mot de passe</p>
                <input type="password" name="password" required>
            </div>
            <div>
                <p>Nom & prénom</p>
                <input type="text" name="full name" required>
            </div>
            <div>
                <p>Date de naissance</p>
                <input type="date" name="birthdate" required>
            </div>
            <div>
                <p>Adresse</p>
                <input type="text" name="address" required>
            </div>
            <div>
                <p>Code postal</p>
                <input type="text" name="postal" pattern="[0-9]{5}" required>
            </div>
            <div>
                <p>Ville</p>
                <input type="text" name="city" required>
            </div>
            <div>
                <p>Genre</p>
                <select name="genre">
                    <option value="man">Homme</option>
                    <option value="woman">Femme</option>
                    <option value="none" selected>Non renseigné</option>
                </select>
            </div>
            <div>
                <p>Photo</p>
                <input type="file" name="picture" accept="image/png, image/jpeg" required>
            </div>
            <div>
                <p>Couleur préférée</p>
                <input type="color" name="color">
            </div>
            <button type="submit">
                <p>S'incrire</p>
                <i class="icon-arrow-right"></i>
            </button>
        </form>
    </main>

    <?php include("modules/footer.php"); ?>

</body>
</html>