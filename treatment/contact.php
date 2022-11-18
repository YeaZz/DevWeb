<?php

include("../include/config.php");

if (!empty($_POST) && isset($_SESSION["id"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    $subject = $_POST["subject"];
    $id = $_SESSION["id"];
    $message = $_POST["message"];
    if ($pdo != null) {
        $query = $pdo->prepare("INSERT INTO p2107540.messages VALUES (0, :subject, :user, :message)");
        $query->execute([
            'subject' => $subject,
            'user' => $id,
            'message' => $message
        ]);
        header("../index.php");
        return;
    }
}
header("Location: ../login.php");
