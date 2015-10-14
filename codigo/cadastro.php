<?php

$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cadastrar Coleção</title>
    <meta charset="utf-8" />
  </head>
  <body>
  <form action="cadcolecao.php">
      
       
        <label for="nome">Digite o nome da Coleção:</label>
        <input type="text" name="nome" id="nome" />
        <br />
            
        <input type="submit" value="cadastrar" />  
    </form>    
  </body>   
 </html>