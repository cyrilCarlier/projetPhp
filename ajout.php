<?php
$servername = "10.69.8.45";
$username = "adel";
$password = "adel";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$conn->query('INSERT INTO stagiaire (nom, prenom) VALUES (\"$_POST['nom']\" , \"$_POST['prenom']\")');

$conn->close();
?>

