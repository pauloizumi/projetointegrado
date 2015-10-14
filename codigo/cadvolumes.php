<?php
	$volume  = $_GET['volume'];
	
	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga', 'root', '');
	$sql = "insert into volumes values ($volume)";
	$resultado=$dbh->exec($sql);
 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8" />
  </head>
  <body>
	  
	  <?php
		if($resultado >0){
			echo '<p>Cadastro feito com sucesso</p>';
			header("Location:volumes.php");
		}else{
			echo '<p> Cadastro falhou :c </p>';
		}
	  ?>
  
  
  </body>
 </html>