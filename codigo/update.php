<?php
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manga";

$nome1 = $_POST["nome1"];
$id = $_POST["id"];

// Abrindo conexão com o db.
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificação de conexão
if ($conn->connect_error) {
    die("Falha ao conectar: " . $conn->connect_error);
} 

$sql = "UPDATE `colecao` set Nome ='$nome1' WHERE Id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Falha ao salvar: " . $conn->error;
}

$conn->close();

//aqui você pode colocar um header para te direcionar para outra página, sintaxe abaixo:
header('location:Home.php');
//exit;	
			
?>