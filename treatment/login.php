<?php

include_once("../include/config.php");

session_start();
 
if (isset($_SESSION["id"])) {
    header("Location: ../index.php");
    return;
}

if (!empty($_POST) && isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($pdo != null) {
        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            'email' => $email
        ]);
        $result = $query->fetch();
        if ($result) {
            if (password_verify($password, $result["password"])) {
                $_SESSION["id"] = $result["id"];
                $_SESSION["fullname"] = $result["lastname"] . " " . $result["firstname"];
                $_SESSION["lastname"] = $result["lastname"];
                $_SESSION["firstname"] = $result["firstname"];
                $_SESSION["email"] = $email;
                header("Location: ../index.php");
                return;
            }
        }
    }
}
header("Location: ../login.php");
