 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php

$query = "select * from questions1";

$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;


$vards = $_SESSION['vards'];
$score = $_SESSION['score'];
$test = 2;
$query = "insert into answers (vards ,score, total, test ) values('$vards', '$score', '$total', $test)";
$insert_row = $mysqli->query($query) or die ($mysqli->error . __LINE__);


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
        <h2>Malacis, <?php echo $vards; ?> , esi pabeidzis testu !</h2>

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