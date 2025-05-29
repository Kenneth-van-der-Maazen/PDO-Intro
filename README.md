# PDO-Intro
Kenneth van der Maazen  
Herhaling van PDO-Intro  

_______________________________________________________________________________
PDO Les 1 - Forms // GET en POST  
-------------------------------------------------------------------------------  
# Hoe maak je een form?  
<!-- HTML Form:  

<form method="POST">  
    <input type="text" name="naam" placeholder="Naam" required><br>  
    <input type="email" name="email" placeholder="Email" required><br>  
    <input type="submit" value="Verstuur">  
</form> -->  

GET = via URL  
POST = via form  

Leerdoelen
* Leren soorten formulieren: GET en POST
* Data verzenden met beiden soorten formulieren.
* Data opvangen uit een formulier.
* Leren het verschil tussen de formulieren GET en POST.



_______________________________________________________________________________
PDO Les 2 - PHP Database Object // Database Connectie  
-------------------------------------------------------------------------------  
# MySQL Connectie, Voorbeeld (PDO)  

<?php  

$host = "localhost";  
$db = "pdo-intro";  
$user = "root";  
$pass = "";  

try {  
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);  
    echo "Connected successfully";  
} catch(PDOException $e) {  
    echo "Connection failed: " . $e->getMessage();  
}  

?>  

Leerdoelen
* Leren wat PDO is.
* Leren het maken van een database connectie met behulp van PDO.



_______________________________________________________________________________
PDO Les 3 - PDO Prepared Statements  
-------------------------------------------------------------------------------  
# SQL-query's voorbereiden met placeholders.  

1. prepare  
2. execute  

Voorbereiden van je sql-query doe je wanneer je variabelen meegeeft in je query.  
    $query='select * from data where id = $id'.  
$id is in deze query de variabele.

Voorbeeld INSERT-query:  

# Placeholders:  
$query="insert into data (title, length, price, artist) values (?, ?, ?, ?)";  
$result=$pdo->prepare($query);  
$data=array("The Blues", "45", "10.99", "John");  
$result->execute($data);  


# Named Parameters:  
$query="insert into data (title, length, price, artist) values (:title, :legnth, :price, :artist)";  
$result=$pdo->prepare($query);  
$data=array("title" => "The Blues", "length" => "45", "price" => "10.99", "artist" => "John");
$result->execute($data);  

Leerdoelen
* Leren wat Prepared Statements is.
* Leren gebruik maken van Prepared Statements.
* Leren data Inserten in een tabel.



_______________________________________________________________________________
PDO Les 4 - PDO Select  
-------------------------------------------------------------------------------
# Selecteren van data uit de tabellen en ze tonen op de web pagina.

in welk formaat je de opgevraagde data terug wilt krijgen;
* enkele kolom:                 $pdo->query($query)->fetchColumn();  
* array:                        $pdo->query($query)->fetchAll();
* object:                       $pdo->query($query)->fetchObject();
* inhoud van een enkele rij:    $pdo->query($query)->fetch();

Leerdoelen
* Data selecteren uit een database met behulp van PDO.
* Data weergeven in een webpagina.



_______________________________________________________________________________
PDO Les 5 - PDO Update  
-------------------------------------------------------------------------------
# Update query's in PDO.




Leerdoelen
* Leren de opgehaalde data aanpassen.



_______________________________________________________________________________
PDO Les 6 - PDO Delete  
-------------------------------------------------------------------------------
# Delete query's in PDO.

