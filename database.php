<?php

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'winkel';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
    echo "Connected succesfully!";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>