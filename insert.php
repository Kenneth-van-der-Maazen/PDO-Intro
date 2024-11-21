<?php

 require 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['product_naam'];
    $price = $_POST['prijs_per_stuk'];
    $desc = $_POST['omschrijving'];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
    $result = $pdo->prepare($sql);

    $placeholders = [
        "product_naam" => $name,
        "prijs_per_stuk" => $price,
        "omschrijving" => $desc
    ];
    $result->execute($placeholders);

    if ($result > 0) {
        echo "Product toegevoegd!";

    } else {
        echo "Er ging iets mis!";
    }

    //$view_product = "SELECT * FROM producten";
    //echo 'Alle producten: ', '$view_product';

} else {
    echo 'Voer de juiste gegevens in.';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Insert</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="product_naam" placeholder="`Product Naam">
        <input type="text" name="prijs_per_stuk" placeholder="Prijs per stuk">
        <input type="text" name="omschrijving" placeholder="Omschrijving">
        <input type="submit" name="submit">
    </form>
</body>
</html>