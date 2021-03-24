<?php

// Hiermee maak je contact mee met connect_db.php file + functions.php file
include("./connect_dp.php");
include("./functions.php");


$naam= ($_POST ["naam"]);
$leeftijd= $_POST ["leeftijd"];
$studies= $_POST ["studies"];
$telefoonnummer= $_POST ["telefoonnummer"];
$email= $_POST ["email"]; 
$postcode= $_POST["postcode"];


// Kopieer de database en vervang die met deze hieronder.
$sql = "INSERT INTO `inschrijving` (`id`, `naam`, `leeftijd`, `studies`, `tel`, `email`, `postcode`) VALUES (NULL, '$naam', '$leeftijd', '$studies', '$telefoonnummer', '$email', '$postcode');";

$result = mysqli_query($conn, $sql);

//if ($result) {
  //  $teskt =  "Het Opslaan is gelukt";
//} else {
 //   $tekst = "Het opslaan is gelukt";
//}

header("Location: ./read.php");
?>