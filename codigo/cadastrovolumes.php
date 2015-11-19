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

	//Achando o volume
	$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
		try {
			$conn = new PDO('mysql:host=localhost;dbname=manga', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		   }

	  $sql = "SELECT * FROM colecao WHERE ID=$numeroVolume";
	  $result = $conn->query($sql);

	  if ($result->rowcount() > 0) {
	  
		  foreach($result->fetchAll() as $row){
		  }

	  }


?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro de Volumes</title>
    <meta charset="utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
		integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!-- Optional theme -->
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" 
		integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="botao1.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
		integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </head>
  <style>
	h1{
		padding-left:30px;
		 border:1px solid;
		 border-color: #017783;
	 }
	labbel{
		font-size:20px;
	}
	i{
		font-size:30px;
	}
	div.div1{
		padding-left:30px;
		width:80%;
	}
	h3{
		background-color:lightblue;
	}
	
  </style>
  <body>
	<div>
		<h1>Cadastro de Volumes</h1>
		
		  <div align="center">
				<h3>Digite o Volume a ser Cadastrado!</h3>
			<div align="left" style="padding:10px;">
		
				<labbel>Cadastrar volume para a coleção: <i> <?php echo $row["Nome"];?> </i> </labbel>
				<br>
				<form action="cadvolumes.php" method="post">
					<br>
					<label for="nome">Volume:</label>
						<input type="number" name="volume" id="volume" required="required"/><br>
						<label for="mes">Volume do mês de:</label>
						<input type="text" name="mes" id="mes" required="required" /></br> 
						
						<input type="hidden" name="idcolecao" value="<?=$row["Id"];?>" /> 
						<br />
					<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='listavolumes.php?id=<?=$numeroVolume?>';" />
					<input type="submit" class="btn btn-default" value="Cadastrar" />
				</form>
			</div>
		</div>    
	</div>	
  </body>   
 </html>
 