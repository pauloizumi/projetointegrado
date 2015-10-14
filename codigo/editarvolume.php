<?php
	$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "select volume from volumes";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Editar</title>
    <meta charset="utf-8" />
  </head>
  
  <body>
	<h1>Volumes:</h1>
		<?php
			foreach($dbh->query($sql) as $linha){
			echo "{$linha['volume']}";
			echo '<br>';
			}
		?>
		<form method="post" action="update1.php">
			<label for="vol">Digite o volume a ser editado</label>
			<input type="number" name="vol" id="vol" />
			<br />
			<label for="vol1">Digite o novo volume:</label>
			<input type="number" name="vol1" id="vol1" />
			<br />
			
			<input type="submit" value="Salvar">
		</form>
		
	
  </body>
 </html>