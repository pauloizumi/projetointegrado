<?php
	date_default_timezone_set("America/Sao_Paulo");
	$data =date("Y-m-d");
	
	//variaveis para a base
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manga";

	//variaveis vindas da tela
	$volume  = $_POST['volume'];
	$idColecao  = $_POST['idcolecao'];
	$mes  = $_POST['mes'];
	
	$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
		try {
			$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		   }

	//Inserindo dados no banco de dados.
	$sql = "INSERT INTO volumes (volume,IdColecao,mes,data) VALUES ('$volume','$idColecao','$mes','$data')";
	
	if ($conn->query($sql) == TRUE) {
    echo "Dados salvos com sucesso!";
    header("location:listavolumes.php?id=$idColecao");
    exit;
	}else {
    echo "Falha ao salvar: " . $conn->error;
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