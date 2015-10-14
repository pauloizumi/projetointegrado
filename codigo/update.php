<?php
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manga";

$nome1 = $_POST["nome1"];
$id = $_POST["id"];


$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Falha ao conectar: " . $conn->connect_error);
	} 

$sql = "UPDATE `colecao` set Nome ='$nome1' WHERE Id = $id";

	if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
	}else {
    echo "Falha ao salvar: " . $conn->error;
	}

	$conn->close();


header('location:Home.php');

			
?>