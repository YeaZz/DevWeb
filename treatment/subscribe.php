<?php

include("../include/config.php");

session_start();

if (!empty($_POST) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["lastname"]) && isset($_POST["firstname"]) && isset($_POST["address"]) && isset($_POST["postal"]) && isset($_POST["city"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $address = $_POST["address"];
    $postal = $_POST["email"];
    $city = $_POST["city"];

    if ($pdo != null) {

        $query = $pdo->prepare("SELECT * FROM p2107540.users WHERE email = :email");
        $query->execute([
            'email' => $email
        ]);
        $result = $query->fetch();
        if ($result) return;

        $query = $pdo->prepare("INSERT INTO p2107540.users VALUES (0, :email, :firstname, :lastname, :password, :city, :postal, :address, 1, now())");
        $query->execute([
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'city' => $city,
            'postal' => $postal,
            'address' => $address
        ]);
        header("../index.php");
        return;
    }
}
header("Location: ../login.php");
