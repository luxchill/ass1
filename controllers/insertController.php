<?php

include "../models/connect.php";

try{

    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $base64Image = base64_encode($imageData);

    $sql = "INSERT INTO users (username, email, password, image) VALUES (:username, :email, :password, :image)";
    $stmt = $conncet->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':image', $base64Image);
    $stmt->execute();
    header("Location: ../views/");
} catch (PDOException $e) {
    die($e->getMessage());
}
