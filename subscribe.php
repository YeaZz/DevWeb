<!DOCTYPE html>
<html lang="en">
    <?php include("modules/head.php") ?>
<body>

    <?php include("modules/header.php"); ?>

    <main>
    <h1>Abonnez-vous</h1>
        <form method="post" action="modules/form.php">
            <div>
                <label for="email">Email</label>
                <input type="email" name="mail" required>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label for="full_name">Nom & prénom</label>
                <input type="text" name="full_name" required>
            </div>
            <div>
                <label for="birthdate">Date de naissance</label>
                <input type="date" name="birthdate" required>
            </div>
            <div>
                <label for="address">Adresse</label>
                <input type="text" name="address" required>
            </div>
            <div>
                <label for="postal">Code postal</label>
                <input type="text" name="postal" pattern="[0-9]{5}" required>
            </div>
            <div>
                <label for="city">Ville</label>
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
                <label for="picture">Photo</label>
                <input type="file" name="picture" accept="image/png, image/jpeg" required>
            </div>
            <div>
                <label for="color">Couleur préférée</label>
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