<?php

include "../models/connect.php";

try {
    $sql = "UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id";
    $stmt = $conncet->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
    header("Location: ../views/");
} catch (PDOException $e) {
    die($e->getMessage());
}
?>