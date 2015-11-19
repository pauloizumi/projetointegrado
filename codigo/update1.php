<?php
		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manga";
	$dbh = new PDO('mysql: host=localhost;port=3306;dbname=manga;charset=utf8', $username,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$vol1 = $_POST["vol1"];
	$vol = $_POST["vol"];


	$sql = "UPDATE `volumes` set volume ='$vol1' WHERE volume = $vol";

	if ($dbh->query($sql) === TRUE) {
		echo "Dados salvos com sucesso!";
	}else {
		echo "Falha ao salvar: " . print_r($dbh->errorInfo());

	}

	header('location:listavolumes.php');

			
?>