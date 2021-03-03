<?php

// Hiermee maak je contact mee met connect_db.php file + functions.php file
include("./connect_db.php");
include("./functions.php");


$naam= sanitize ($_POST ["naam"]);
$leeftijd= sanitize ( $_POST ["leeftijd"]);
$studies= sanitize ($_POST ["studies"]);
$telefoonnummer= sanitize ($_POST ["telefoonnummer"]);
$email= sanitize ($_POST ["email"]);  


// Kopieer de database en vervang die met deze hieronder.
$sql = "INSERT INTO `users` (`id`, `Firstname`, `infix`, `lastname`) VALUES (NULL, '$Firstname', '$infix', '$lastname');";
mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql);

if ($result) {
    $teskt =  "Het Opslaan is gelukt";
} else {
    $tekst = "Het opslaan is gelukt";
}

header("Location: ./read.php");
?>