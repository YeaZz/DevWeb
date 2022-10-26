<!DOCTYPE html>
<html lang="en">
    <?php include("../modules/head.php") ?>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <table>
            <caption>Données du formulaire</caption>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_POST as $key => $value): ?> 
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>