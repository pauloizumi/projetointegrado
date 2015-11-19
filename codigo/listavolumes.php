<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista Volumes</title>
    <meta charset="utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
		integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!-- Optional theme -->
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" 
		integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="botao2.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
		integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </head>
  <style>
	h1{padding-left:30px;
		border:1px solid;
		 border-color: #017783;
	 }
	 
	 table {width:50%;
	 border: 1px solid #ccc;
	 border-collapse: collapse;
	 border-spacing: 0;display: table;
	 "border="1px;
	 }
	 
	 td{
		 font-size:20px;
	 }
	h2{ 
	background-color:lightblue;
	}
	
	
  
  </style>
  
  <body>
	  <h1>Lista de volumes:</h1>

	<?php

		//validação para verificar se o GEt não está vindo vazio;
		  if (!empty($_GET)) {
			$numeroVolume = $_GET['id'];
			
		  }

		//variaveis para a base
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "manga";

		//lógica  para achar o volume
		$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
				try {
					$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				   }


			$sql = "SELECT colecao.Id,colecao.Nome,volume,mes,data FROM colecao,volumes where volumes.IdColecao=$numeroVolume AND colecao.Id=volumes.IdColecao ORDER BY volumes.volume ASC";

		  $result = $conn->query($sql);
		  if ($result->rowCount() > 0) {
			foreach($result->fetchAll() as $row){ //coletando o nome da coleção;
			}
			
			

	?>

	  <div align="center">
		<table style=""border="1px;">
		  <tr>
			<td></td>
			<td><b><?php echo $row['Nome']; ?> <b></td>
			<td><b>Mangá do Mês de:<b></td>
			<td><b>Cadastrado em:<b></td>
		  </tr>
		  
	<?php
		  
		  $cont =1;
		  foreach($conn->query($sql) as $linha){

			if($cont % 2 == 0)
			{
			  echo "<tr><td></td>";
			  echo "<td>{$linha['volume']}</td>";
			  echo "<td>{$linha['mes']}</td>";
			  echo "<td>{$linha['data']}</td></tr>";  
			}
			else
			{
			  echo "<tr><td style=\"background-color:#f1f1f1 !important\"></td>";
			  echo "<td style=\"background-color:#f1f1f1 !important\">{$linha['volume']}</td>";  
			  echo "<td style=\"background-color:#f1f1f1 !important\">{$linha['mes']}</td>";
			  echo "<td style=\"background-color:#f1f1f1 !important\">{$linha['data']}</td></tr>";
			}
		  
		  $cont=$cont+1;
			
		  }

	?>
		 

		</table>
		<br>
		<input type="button" class="btn btn-default" value="Excluir" onclick="javascript: location.href='excluivolume.php?id=<?=$numeroVolume?>';" />
		<input type="submit" class="btn btn-default" value="Editar" onclick="javascript: location.href='editarvolume.php?id=<?=$numeroVolume?>';" />
		<input type="submit" class="btn btn-default"value="Cadastrar" onclick="javascript: location.href='cadastrovolumes.php?id=<?=$numeroVolume?>';" />
		<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';" />

	  </div>
	<?php

	}

	  else
	  {
	?>
	   <div align="center">
		  
		<h2>Nenhum registro encontrado, por favor faça o cadastro!.</h2>
		
		<input type="submit" class="btn btn-default" value="Cadastrar" onclick="javascript: location.href='cadastrovolumes.php?id=<?=$numeroVolume?>';" />
		<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';" />

	   </div>
	<?php
	  }
	?>

  </body>
 </html>
  