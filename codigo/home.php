<?php
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "select Id,Nome from colecao";
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
  </head>
  <style>
  </style>
  
  <body>
  <h1>Mangás:</h1>
  <form action="cadastro.php">
  <?php
   foreach($dbh->query($sql) as $linha){
		echo "{$linha['Id']}";
		echo " - ";
		echo "{$linha['Nome']}<br>";
		
		echo '<br>';
	}
  ?>
  <input name="submit" type="submit" value="Cadastrar">
 
  </form>
 <form action ="editarcolecao.php">
	 <input name="submit" type="submit" value="Editar">

 </form>
 
	
	
  </body>
 </html>
  