<?php

include("../include/config.php");

session_start();

if (!empty($_POST) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["lastname"]) && isset($_POST["firstname"]) && isset($_POST["address"]) && isset($_POST["postal"]) && isset($_POST["city"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $address = $_POST["address"];
    $postal = $_POST["postal"]; 
    $city = $_POST["city"];
    if ($pdo != null) {
        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            'email' => $email
        ]);
        $result = $query->fetch();
        if (!$result) {
            $date = date("Y-m-d H:i:s");
            $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $query = $pdo->prepare("INSERT INTO users (email, firstname, lastname, password, town, postal, address, active, updated) VALUES (:email, :firstname, :lastname, :password, :city, :postal, :address, 1, '{$date}')");
            $query->execute([
                'email' => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'password' => $password_hash,
                'city' => $city,
                'postal' => $postal,
                'address' => $address
            ]);
            header("Location: ../login.php");
            return;
        }
    }
}
header("Location: ../subscribe.php");
