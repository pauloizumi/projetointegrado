  <?php
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "select volume from volumes";
?>

 <!DOCTYPE html>
<html>
  <head>
    <title>Volumes</title>
    <meta charset="utf-8" />
  </head>
 <body>
		<h1>Volumes que possuo:</h1>
	  <form action="cadastrovolumes.php">
		<?php
			foreach($dbh->query($sql) as $linha){
			echo "{$linha['volume']}";
			echo '<br>';
			}
		?>
	   <input type="submit" value="Cadastrar nova Coleção"/>
	  </form>
	  <form action ="editarvolume.php">
		 <input name="submit" type="submit" value="Editar">

	 </form>
  </body>
 </html>