<?php
	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "SELECT Id,Nome FROM colecao ORDER BY ID ASC";
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Excluir</title>
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
		h3{
			background-color:lightblue;
		}
		
  
  </style>
  <body>
  	<div style="padding-left:30px;width:80%">
  		<h1>Mangás:</h1>
			<div align="center">
				<h3>Selecione abaixo a coleção que deseja excluir!</h3>
				<form method="post" action="delcolecao.php">
					<div align="left" >
					<label for="id">Coleção:</label>
						<select name="id" id="id">
						  <?php
								foreach($dbh->query($sql) as $linha)
								{
						  ?>
						  	<option value="<?= $linha['Id']; ?>"><?= $linha['Nome']; ?></option>
						  <?php
								} //fim do foreach	
						  ?>
						</select>	
					<br />
					<br />
					
					<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='index.php';" />
					<input type="submit" class="btn btn-default" value="Excluir">
					</div>
				</form>
			</div>
	</div>
  </body>
 </html>
  
  