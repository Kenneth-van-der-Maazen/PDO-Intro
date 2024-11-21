<?php
// $_GET == zichtbaar in je URL
$naam = $_GET['naam'];
$achternaam = $_GET['achternaam'];
$leeftijd = $_GET['leeftijd'];
$adres = $_GET['adres'];
$email = $_GET['email'];

echo $naam . ' ' . $achternaam;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET.php</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="achternaam" placeholder="Achternaam">
        <input type="text" name="leeftijd" placeholder="Leeftijd">
        <input type="text" name="adres" placeholder="Adres">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" name="knop">
    </form>
</body>
</html>

<!-- de GET methode maakt dat de data die je in de formulier invult, zichtbaar wordt in de URL -->