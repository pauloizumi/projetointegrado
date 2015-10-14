  <?php
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "select * from volumes";
?>

 <!DOCTYPE html>
<html>
  <head>
    <title>Resultado</title>
    <meta charset="utf-8" />
  </head>
  <body>
  <?php
  echo $sql;
  
  ?>
  
  
  <input type="submit" value="Cadastrar nova Coleção" action="cadastrovolumes.html" />