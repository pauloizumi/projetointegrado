<?php
	
	//variaveis para a base
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manga";

	//variaveis vindas da tela
	$volume  = $_POST['nome1'];
	$idVolume  = $_POST['idVolume'];
	$idColecao  = $_POST['idcolecao'];

	echo $volume;
	echo $idVolume;
	
	$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
		try {
			$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		   }

	$sql = "UPDATE volumes SET volume=$volume WHERE Id=$idVolume";
		echo $sql;
	if ($conn->query($sql) == TRUE) {
		echo "Dados atualizados com sucesso!";
		header("location:listavolumes.php?id=$idColecao");
		exit;
	}else {
		header("location:listavolumes.php?id=$idColecao");
		exit;
	}
 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8" />
  </head>
  <body>
	  


  </body>
 </html>