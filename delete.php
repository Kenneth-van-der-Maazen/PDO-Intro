<?php
require "database.php";

if ($_GET['product_code']) {
    $sql = "DELETE FROM products WHERE product_code= :product_code";
    $result = $pdo->prepare($sql);
    $placeholders = [
        "product_code" => $_GET['product_code']
    ];
    $result->execute($placeholders);
    if ($result) {
        echo "Product verwijderd!";
        header("Refresh:3; url=index.php");
    } else {
        echo "Er is iets mis gegaan!";
        die();
    }
} else {
    header("Location: index.php");
    die();
}

?>