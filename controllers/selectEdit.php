<?php

include "../models/connect.php";

try {
    $sql = "SELECT * FROM users WHERE id = :id";

    $stmt = $conncet->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}


?>