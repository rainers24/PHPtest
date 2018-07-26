 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php


$query="select * from questions2";
$vards = $_SESSION['vards'];
//Get Results
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Testa Uzdevums</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Testa Uzdevums</h1>
	</div>
      </header>


      <main>
	<div class="container">
        <h2>Paldies, ka piedalijies !</h2>
        <p>Rezultāts :<?php echo $_SESSION['score']; ?> no <?php echo $total; ?> jautājumiem </p>
	     <a href="index.php" class="start">Atgriezties uz sākumu</a>
	     <?php session_destroy(); ?>
	</div>
      </main>
        <footer><div class="container">
                Rainers Knīss 2018
            </div>
        </footer>
  </body>
</html>