<?php
// $_POST == NIET zichtbaar in je URL
$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$leeftijd = $_POST['leeftijd'];
$adres = $_POST['adres'];
$email = $_POST['email'];

echo $naam . ' ' . $achternaam;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST.php</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam">
        <input type="text" name="achternaam" placeholder="Achternaam">
        <input type="text" name="leeftijd" placeholder="Leeftijd">
        <input type="text" name="adres" placeholder="Adres">
        <input type="text" name="email" placeholder="Email">
        <input type="submit" name="knop">
    </form>
</body>
</html>

<!-- de POST methode maakt dat de data die je in de formulier invult, NIET zichtbaar is in de URL -->