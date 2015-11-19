<?php

	//validação para verificar se o GEt não está vindo vazio;
  if (!empty($_GET)) {
    $numeroVolume = $_GET['id'];
  }

  	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');

	$sql = "SELECT Id,volume From volumes where IdColecao=$numeroVolume order by Id ";
?>
<!DOCTYPE html>
<html>
    <title>Excluir</title>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
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
			width:80%";
		}
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
  <div class="div1">
  		<h1>Volumes:</h1>
			<div align="center">
				<h3>Selecione abaixo o volume que deseja excluir!</h3>
				
					<div align="left" >
					<form method="post" action="delvolume.php">
							<label for="id">Volume:</label>
							<select name="idVolume" id="vol">
							  <?php
									foreach($dbh->query($sql) as $linha)
									{
							  ?>
								
								<option name="idVolume" id="opt" value="<?= $linha['Id']; ?>"><?= $linha['volume']; ?></option>

							  <?php
									} //fim do foreach	
							  ?>
							</select>	
			<br />
						<br />
							<input type="hidden" name="idcolecao" value="<?= $numeroVolume?>" />	
						
							
							<input type="button" class="btn btn-default" value="Voltar" onclick="javascript: location.href='listavolumes.php?id=<?=$numeroVolume?>';" />
							<input type="submit" class="btn btn-default" value="Excluir">
					</form>
						
					</div>
				<!--</form>-->
			</div>
	</div>
	<script type="text/javascript" src="jquery-1.11.0.js"></script>
	<script type="text/javascript" src="jquery.easing.min.js"></script>
	<script>
	$("#volid").val($("select").val());
	$("select").change(function (){
		$("#volid").val($("select").val());
	});
	</script>
  </body>
 </html>