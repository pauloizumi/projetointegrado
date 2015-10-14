<?php
$nome  = $_GET['nome'];



  $dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga', 'root', '');
  $sql = "insert into colecao(Nome) values ('$nome')";
  $resultado=$dbh->exec($sql);
 // echo 'teset';
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
		echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
echo "javascript:window.location='Home.php';</script>";
		echo "<script language=javascript>alert( 'Alerta Vermelho!' );</script>";
		//echo '<p>Cadastro feito com sucesso</p>';
		header("Location:Home.php");
	}else{
		echo '<p> Cadastro falhou :c </p>';
	}
  ?>
  
  
  </body>
 </html>