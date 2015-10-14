<?php

$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Resultado</title>
    <meta charset="utf-8" />
  </head>
  <body>
	<form action="cadvolumes.php" method="post">
      
        <legend>Cadastrar Mangá</legend>
        <label for="nome">Volumes:</label>
        <input type="number" name="volume" id="volume" />
        <br />
            
        <input type="submit" value="cadastrar" />
    </form>    
  </body>   
 </html>
 