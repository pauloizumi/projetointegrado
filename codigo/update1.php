<?php
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manga";

$vol1 = $_POST["vol1"];
$vol = $_POST["vol"];


$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    die("Falha ao conectar: " . $conn->connect_error);
	} 

$sql = "UPDATE `volumes` set volume ='$vol1' WHERE volume = $vol";

	if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
	}else {
    echo "Falha ao salvar: " . $conn->error;
	}	

$conn->close();


header('location:volumes.php');

			
?>