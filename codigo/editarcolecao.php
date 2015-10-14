<?php
	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "select Id,Nome from colecao";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Editar</title>
    <meta charset="utf-8" />
  </head>
  
  <body>
	<h1>Mangás:</h1>
		<?php
			foreach($dbh->query($sql) as $linha){
			echo "{$linha['Id']}";
			echo " - ";
			echo "{$linha['Nome']}<br>";
			echo '<br>';
			}
		?>
		<form method="post" action="update.php">
			<label for="id">Digite o Id da Coleção:</label>
			<input type="number" name="id" id="id" />
			<br />
			<label for="nome">Digite o novo nome da Coleção:</label>
			<input type="text" name="nome1" id="nome1" />
			<br />
			
			<input type="submit" value="Salvar">
		</form>
		
	
  </body>
 </html>
  
  