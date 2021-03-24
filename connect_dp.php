<?php

// met deze gegevens kunnen we inloggen op de mysql server en een data base selecteren.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opleiding";

// met deze functie maken we contact met de mysql server
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>