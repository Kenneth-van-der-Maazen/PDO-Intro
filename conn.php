<?php

$host = "localhost";
$db = "pdo-intro";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected to Database: " . "[ $db ]" . "<br><br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>