<?php

include("../include/config.php");

session_start();

if (!empty($_POST) && isset($_SESSION["id"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    $id = $_SESSION["id"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    if ($pdo != null) {
        $query = $pdo->prepare("INSERT INTO messages VALUES (0, :subject, :user, :message)");
        $query->execute([
            'subject' => $subject,
            'user' => $id,
            'message' => $message
        ]);
        header("Location: ../index.php");
        return;
    }
}
header("Location: ../login.php");
