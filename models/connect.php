<?php

$host = 'localhost';
$dbname= 'php1';
$user = 'postgres';
$pass = '';


try {
    $conncet = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $conncet->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}



?>