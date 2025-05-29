<?php
require "conn.php";

if (isset($_POST['knop'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $user_id = $_GET['user_id'];

    $sql = "UPDATE users SET voornaam= :voornaam, achternaam= :achternaam, gebruikersnaam= :gebruikersnaam WHERE user_id = :user_id";
    $result = $pdo->prepare($sql);
    $placeholders = [
        "voornaam" => $voornaam,
        "achternaam" => $achternaam,
        "gebruikersnaam" => $gebruikersnaam,
        "user_id" => $user_id
    ];
    $result->execute($placeholders);
    if ($result) {
        echo "Gebruiker aangepast!";
        header("refresh:3; url=add-user.php");
    } else {
        echo "OOPS.. Er ging iets mis!";
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>
<body>
    <h1>Gebruikers aanpassen</h1>
    <form method="POST">
        <input type="text" name="voornaam" placeholder="Voornaam" required>
        <input type="text" name="achternaam" placeholder="Achternaam" required>
        <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
        <input type="submit" name="knop" value="Verzenden">
    </form>
</body>
</html>