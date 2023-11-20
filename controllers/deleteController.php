<?php

include "../models/connect.php";

try {
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conncet->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("Location: ../views/");
} catch (PDOException $e) {
    die($e->getMessage());
}
