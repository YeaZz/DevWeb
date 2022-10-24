<?php

    define("FULL_NAME", "© Cavalcante Noa");
    define("PHONE_NUMBER", "07 83 41 60 31");
    define("ADDRESS", "IUT Lyon1 Bourg-en-Bresse 2022-2023");

    define("IMG_DIR", "../img/blog/");
    
    function getImage($name) {
        if (strpos($_SERVER["HTTP_ACCEPT"], "image/avif") !== false)
            return $name . ".avif";
        elseif (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false)
            return $name . ".wepb";
        else
            return $name . ".jpg";
    }

    function redirect($page, $content) {
        return ($_SERVER["PHP_SELF"] === $page)
        ? "<li class='active'>" . $content . "</li>"
        : "<li><a href=" . $page . ">" . $content . "</a></li>";
    }
?>