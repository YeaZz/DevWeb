<?php
    function saveFile($file_array) {
        $file = $file_array["tmp_name"];
        $filename = $file_array["name"];
        $type = $file_array["type"];
        if ($type === "image/png" || $type === "image/jpg" || $type === "image/jpeg")
            move_uploaded_file($file, "img/uploaded_files/" . $filename);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("../modules/head.php") ?>
<body>

    <?php include("../modules/header.php"); ?>

    <main>
        <h1>Données du formulaire envoyé</h1>
        <table>
            <caption>Données du formulaire</caption>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($_POST as $key => $value):
                ?> 
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php
                    endforeach;
                    foreach ($_FILES as $key => $value):
                        saveFile($value);
                ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><img src=<?= "../img/uploaded_files/" . $value["name"] ?> alt="uploaded file" /></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </main>

    <?php include("../modules/footer.php"); ?>

</body>
</html>