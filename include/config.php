<?php

define("FULL_NAME", "© Cavalcante Noa");
define("PHONE_NUMBER", "07 83 41 60 31");
define("ADDRESS", "IUT Lyon1 Bourg-en-Bresse 2022-2023");

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

try {
    $pdo = new PDO('mysql:host=iutbg-lamp.univ-lyon1.fr;dbname=p2107540' , 'p2107540', '12107540');
} catch (PDOException $e) {
    $pdo = null;
}