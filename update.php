<?php

require 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['product_naam'];
    $price = $_POST['prijs_per_stuk'];
    $desc = $_POST['omschrijving'];
    $product_code = $_GET['product_code'];

    $sql = "UPDATE producten SET naam= :product_naam, prijs= :prijs_per_stuk, omschrijving= :omschrijving WHERE product_code = :product_code";
    $result = $pdo->prepare($sql);
    $placeholders = [
        "product_naam" => $name,
        "prijs_per_stuk" => $price,
        "omschrijving" => $desc,
        "product_code" => $product_code
    ];
    $result->execute($placeholders);

    if ($result > 0) {
        echo "Product is aangepast!";
        header("Refresh: 3; Url=select.php");
    } else {
        echo "Er ging iets mis!";
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Update</title>
</head>
<body>
    <h1>Product aanpassen</h1>
    <form method="POST">
        <input type="text" name="product_naam" placeholder="Product Naam">
        <input type="text" name="prijs_per_stuk" placeholder="Prijs per stuk">
        <input type="text" name="omschrijving" placeholder="Omschrijving">
        <input type="submit" name="submit">
    </form>