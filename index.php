 <?php include "database.php"; ?>
 <?php session_start(); ?>
<?php


if (isset($_POST['submit'])) {
//Get Post variables
    $vards = $_POST['vards'];
    $question = $_POST['question'];
    $_SESSION['vards'] = $vards;
    if (empty($_POST["vards"])) {
        echo "AIZPILDI VĀRDA LAUKU !!!!!";
    }
}

	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;




 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Testa uzdevums</title>
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
          <form method="post" action="index.php" >
	<ul>

        <label>Vards: </label>
        <input  type="text" name="vards" />
        <input type="submit" name="submit" value="Submit" />


        <li><strong>Izvēlies testu: </strong></li>

	</ul>
              <a href="question.php?n=1" name="submit" type="submit" class="start">Tests uz atjautību</a>
              <a href="question1.php?n=1" name="submit" type="submit" class="start">Tests par Mašīnām</a>
              <a href="question2.php?n=1" name="submit" type="submit" class="start">Tests par Pasauli</a>


      </div>
    </div>
    </form>
    </main>
    <footer>
        <div class="container">
            Rainers Knīss 2018
        </div>
    </footer>
  </body>
</html>