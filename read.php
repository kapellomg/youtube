<?php
// met deze gegevens kunnen we inloggen op de mysql server en een data base selecteren.
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "opleiding";

// met deze functie maken we contact met de mysql server
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `inschrijving`";
// Dit is de functie die de query $sql via de verbinding $conn naar de databass stuurt.
$result = mysqli_query($conn, $sql);

$records = "";

while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr>
                  <th scope ='row'>" . $record["id"] . " </th>
                  <td> " . $record["naam"] . "</td>
                  <td> " . $record["leeftijd"] . "</td>
                  <td> " . $record["studies"] . "</td>
                  <td> " . $record["telefoonnummer"] . "</td>
                  <td> " . $record["email"] . "</td>
                  <td> " . $record["postcode"] . "</td>
                  <td> 
                    <a href='./update.php?id=" . $record["id"] . "'>
                      <img src='./img/icons/b_edit.png'alt ='pencil'>
                    </a>
                  </td>
                  <td> 
                  <a href='./delete.php?id=" . $record["id"] . "'>
                      <img src='./img/icons/b_drop.png' alt='cross'> 
                    </a>
                  </td>
                 </tr>";
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Dit is mijn eigen style.css-->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Op deze plek komt de tabel --->
<div class = "row">
<div class = "col-12">
 <a href="index.php" type= "button" class="btn btn-danger btn-lg btn-block"> Nieuwe record toevoegen</a>
</div>
</div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="">id</th>
        <th scope="col" class="">naam</th>
        <th scope="col" class="">leeftijd</th>
        <th scope="col" class="">studies</th>
        <th scope="col" class="">telefoonnummer</th>
        <th scope="col" class="">email</th>
        <th scope="col" class="">postcode</th>
      </tr>
    </thead>
    <tbody class="", style="font-size:1.3vw"  >
      <?php
      echo $records;
      ?>
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </main>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>