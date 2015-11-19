<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manga";
	$dbh = new PDO('mysql: host=localhost;port=3306;dbname=manga;charset=utf8', $username,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			

	$nome1 = $_POST["nome1"];
	$id = $_POST["id"];


	$sql = "DELETE FROM `colecao` WHERE Id = $id";

		if ($dbh->query($sql) === TRUE) {
			echo "Dados salvos com sucesso!";
			}else {
			echo "Falha ao salvar: " . print_r($dbh->errorInfo());
		}


	header('location:index.php');

			
?>