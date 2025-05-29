<?php
require "conn.php";

if (isset($_POST['knop'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $gebruikersnaam = $_POST['gebruikersnaam'];

    $sql = "INSERT INTO users (voornaam, achternaam, gebruikersnaam) VALUES (:voornaam, :achternaam, :gebruikersnaam)";
    $result = $pdo->prepare($sql);
    $placeholders = [
        "voornaam" => $voornaam,
        "achternaam" => $achternaam,
        "gebruikersnaam" => $gebruikersnaam
    ];
    $result->execute($placeholders);
    if ($result) {
        echo "Gegevens zijn toegevoegd!<br>";
    } else {
        echo "OOPS.. Er ging iets mis!";
        die();
    }
}


$users = $pdo->query("SELECT * FROM users");
$result = $users->fetchAll();

// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>ADD USER</title>
</head>
<body>
    <h1>Gebruikers account toevoegen</h1>
    <form method="POST">
        <input type="text" name="voornaam" placeholder="Voornaam" required>
        <input type="text" name="achternaam" placeholder="Achternaam" required>
        <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
        <input type="submit" name="knop" value="Verzenden">
    </form>


    <h2>Overzicht alle gebruikers</h2>
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Gebruikersnaam</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
            foreach($result as $user) {
                echo "<tr>";
                echo "<td>". $user['user_id']."</td>";
                echo "<td>". $user['voornaam']."</td>";
                echo "<td>". $user['achternaam']."</td>";
                echo "<td>". $user['gebruikersnaam']."</td>";

                echo "<td><a href='edit-user.php?user_id=".$user['user_id']."'>Edit</a></td>";
                echo "<td><a href='delete-user.php?user_id=".$user['user_id']."'>Delete</a></td>";

                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>