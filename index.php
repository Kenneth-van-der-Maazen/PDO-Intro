<?php

require 'database.php';

$select = $pdo->query("SELECT * FROM producten");
$result = $select->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Index</title>
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
            <th colspan="2">Action</th>
        </tr>

        <?php
            foreach ($result as $row) {
                echo "<tr>";
                    echo "<td>" . $row['product_code'] . "</td>";
                    echo "<td>" . $row['product_naam'] . "</td>";
                    echo "<td>" . $row['prijs_per_stuk'] . "</td>";
                    echo "<td>" . $row['omschrijving'] . "</td>";
                    echo "<td> <a href='update.php?product_code=".$row['product_code']."'>Edit</a></td>";
                    echo "<td> <a href='delete.php?product_code=".$row['product_code']."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>