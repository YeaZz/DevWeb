<?php

include_once("../include/config.php");

session_start();

if (!empty($_POST) && isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($pdo != null) {
        $query = $pdo->prepare("SELECT * FROM p2107540.users WHERE email = :email AND password = :password");
        $query->execute([
            'email' => $email,
            'password' => $password
        ]); 
        $result = $query->fetch();
        if ($result) {
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
header("Location: ../login.php");