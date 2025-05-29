<?php
require "conn.php";

if ($_GET['user_id']) {
    $sql = "DELETE FROM users WHERE user_id = :user_id";
    $result = $pdo->prepare($sql);
    $placeholders = [
        "user_id" => $_GET['user_id']
    ];
    $result->execute($placeholders);
    if ($result) {
        echo "Gebruiker verwijderd!";
        header("Refresh:3; url=add-user.php");
    } else {
        echo "OOPS.. De gebruiker kon niet worden verwijderd!";
        header("Refresh:3; url=add-user.php");
        die();
    }
} else {
    header("Location: add-user.php");
    die();
}
?>