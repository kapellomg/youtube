<?php

include("./connect_db.php");
$id = $_GET["id"];
$sql = "SELECT * From `users` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);



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
  <style>

  </style>
  <title>Carmondo!</title>
</head>

<body>
  <main class="container">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Aanpassingen maken.</h1>
            <p class="lead">Deze page maakt u aanpassingen aan de records.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-5">
          <form action="./update_script.php" method="post">
            <div class="form-group">
              <label for="Firstname" class="text-white" style="font-size:1.3vw">Voer u voornaam en achternaam in.</label>
              <input type="text" class="form-control" id="Firstname" aria-describedby="firstnameHelp" placeholder="invoer voornaam" name="Firstname" value="<?php echo $record["firstname"]?>">
            </div>
            <div class="form-group">
              <label for="infix" class="text-white" style="font-size:1.5vw">wat voor service wilt u hebben?</label>
              <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" placeholder="Nieuwe banden/APK-keuring/Tuning/voertuig kopen" name="infix" value="<?php echo $record["infix"]?> ">
            </div>
            <div class="form-group" >
              <label for="lastname" class="text-white" style="font-size:1.5vw">voer u telefoon nummer in</label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Voer u telefoon nummer in" name="lastname" value="<?php echo $record["lastname"]?> ">
            </div>
            <input type= "hidden" value= <?php echo $id; ?> name = "id">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-7">

      </div>
      <div class="col-12">
        <h1 class="display-4 text-white">Alle informatie word privee gehouden</h1>
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