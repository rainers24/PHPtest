 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php

$query = "select * from questions"; //A simple query which shows how many rows are in the table

$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;


$vards = $_SESSION['vards']; // passes the variable from the first view
$score = $_SESSION['score']; // passes the variable from the process view
$test = 1; //  this is the first test
$query = "insert into answers (vards ,score, total, test ) values('$vards', '$score', '$total', $test)"; // inserts everyhting in to the database
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
	     <h2>Malacis, <?php echo $vards; ?> , esi pabeidzis testu !</h2> // includes the vards variable

	     <p>Rezultāts :<?php echo $_SESSION['score']; ?> no <?php echo $total; ?> jautājumiem </p> // shows the result

	     <a href="index.php" class="start">Atgriezies uz sākumu</a> // YOU can try out other tests
	     <?php session_destroy(); ?> //destroys the session so that there wont be any data in variables left
	</div>
      </main>


    <footer>
      <div class="container">
      	   Rainers Knīss 2018
      </div>
    </footer>
  </body>
</html>