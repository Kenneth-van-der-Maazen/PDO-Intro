<?php
// $_POST == kan je data ophalen achter de schermen.

// isset() == controleert of een variabele gevuld is met een waarde // of de waarde niet een null is.
if (isset($_POST['knop'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];

    echo $voornaam . " " . $achternaam;
} else {
    echo "Formulier is nog niet ingediend.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="voornaam" placeholder="Vul je naam in">
        <input type="text" name="achternaam" placeholder="Vul een achternaam in">
        <input type="submit" name="knop" value="Verzenden">
    </form>
</body>
</html>