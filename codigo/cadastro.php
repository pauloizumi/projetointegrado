<?php

	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');

?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastrar Coleção</title>
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
	  div.div1{
			padding-left:30px;
			width:80%;
		}
		  h1 {padding-left:30px;
			 border:1px solid;
			 border-color: #017783;
		  }
		  h3{
			  background-color:lightblue;
		  }

	</style>
  <body>
    <div class="div1">
	  <h1>Cadastrar Mangá:</h1>
	  <form action="cadcolecao.php">
			<div align="center">
					<h3>Digite um Mangá para Cadastrar!</h3>  
					<div align="left" >
						<label for="nome">Digite o nome da Coleção:</label>
						<input type="text" name="nome" id="nome" required="required" />
						<br />
						<br />
						<input name="button" type="button" class="btn btn-default" onClick="javascript: location.href='index.php';" value="Cancelar" />
						<input type="submit" class="btn btn-default" value="cadastrar" />  
					</div> 
			</div>		
		</form>    
	</div>	
  </body>   
 </html>