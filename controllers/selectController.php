<?php

include "../models/connect.php";

try {
    $sql = "SELECT * FROM users";
    $stmt = $conncet->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}


?>