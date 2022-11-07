<?php

define("LOGIN", "admin");
define("PASSWORD", "admin");

session_start();

if (!empty($_POST) && isset($_POST["id"]) && isset($_POST["password"])) {
    if ($_POST["id"] === LOGIN && $_POST["password"] === PASSWORD)
        $_SESSION["admin"] = true;
}

header("Location: ../index.php");