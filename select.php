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
        die();
    }
}

$select = $pdo->query("SELECT * FROM producten");
$result = $select->fetchAll();

//var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Select</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="product_naam" placeholder="`Product Naam">
        <input type="text" name="prijs_per_stuk" placeholder="Prijs per stuk">
        <input type="text" name="omschrijving" placeholder="Omschrijving">
        <input type="submit" name="submit">
    </form>

    <h2>Overzicht producten</h2>
    <table>
        <tr>
            <th>Product Code</th>
            <th>Product Naam</th>
            <th>Prijs per Stuk</th>
            <th>Omschrijving</th>
            <th>Action</th>
        </tr>

        <?php
            foreach ($result as $row) {
                echo "<tr>";
                    echo "<td>" . $row['product_code'] . "</td>";
                    echo "<td>" . $row['product_naam'] . "</td>";
                    echo "<td>" . $row['prijs_per_stuk'] . "</td>";
                    echo "<td>" . $row['omschrijving'] . "</td>";
                    echo "<td> <a href='update.php?product_code=".$row['product_code']."'>Edit</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>