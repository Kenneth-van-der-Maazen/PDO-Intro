<?php
// $_GET == kan data ophalen via de URL.
$voornaam = $_GET['voornaam'];
$achternaam = $_GET['achternaam'];

echo $voornaam . " " . $achternaam;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="voornaam" placeholder="Vul je naam in">
        <input type="text" name="achternaam" placeholder="Vul een achternaam in">
        <input type="submit" name="knop" value="Verzenden">
    </form>
</body>
</html>

<!-- Invoer
naam = Kenneth
achternaam = van der Maazen

Uitvoer
URL: http://localhost/pdo-intro/GET.php?naam=kenneth&achternaam=van+der+Maazen&knop=Verzenden
Pagina: Kenneth van der Maazen -->