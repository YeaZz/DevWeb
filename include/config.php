<?php

define("FULL_NAME", "© Cavalcante Noa");
define("PHONE_NUMBER", "07 83 41 60 31");
define("ADDRESS", "IUTLyon1 Bourg-en-Bresse 2022-2023");

function getImage($name) {
    if (strpos($_SERVER["HTTP_ACCEPT"], "image/avif") !== false)
        return "../img/blog/" . $name . ".avif";
    elseif (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false)
        return "../img/blog/" . $name . ".wepb";
    else
        return "../img/blog/" . $name . ".jpg";
}

function redirect($page, $content) {
    return ($_SERVER["PHP_SELF"] === $page)
    ? "<li class='active'>" . $content . "</li>"
    : "<li><a href=" . $page . ">" . $content . "</a></li>";
}

$pdo;
try {
    $pdo = new PDO('mysql:host=iutbg-lamp.univ-lyon1.fr;dbname=p2107540' , 'p2107540', '12107540');
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

    //updateUpdatedColumn($pdo);
    //cryptPassword($pdo);
} catch (PDOException $e) {
    $pdo = null;
}

function updateUpdatedColumn($pdo) {
    $date = date("Y-m-d H:i:s");
    $count = $pdo->exec("UPDATE users SET updated = '{$date}'");
    echo "Requête effectuée : {$count} lignes modifiées";
}

function cryptPassword($pdo) {
    foreach ($pdo->query("SELECT * FROM users") as $row) {
        set_time_limit(10);
        $hashedPassword = password_hash($row["password"], PASSWORD_DEFAULT);
        $id = $row["id"];
        $query = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
        $query->execute([
            "password" => $hashedPassword,
            "id" => $id
        ]);
    }
}
