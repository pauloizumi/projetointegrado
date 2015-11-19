<?php
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=manga;charset=utf8', 'root', '');


	$sql = "SELECT Id,Nome FROM colecao ORDER BY Id ASC";
	
	date_default_timezone_set("America/Sao_Paulo");
	$data = date("Y/m/d") . "<br>";


?>


<!DOCTYPE html>
<html>
  <head> 
  
    <title>Home</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
		integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<!-- Optional theme -->
	
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" 
		integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="botao.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
		integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </head>
  <style>
	h1 {padding-left:30px;
		 border:1px solid;
		 border-color: #017783;
		  
	}
	
	td {
		font-size:20px;
		
	}
	
	table {width:50%;
		border: 1px solid #ccc;
		border-spacing: 0;
		display: table;
	}
	 
  </style>
  
  <body>
  
  <h1>Meu Mangás:</h1>

  <div align="center">
    <table style=""border="1px;">
      <tr>
        <td></td>
        <td><b>Mangás<b></td>
      </tr>
      
<?php
    
       foreach($dbh->query($sql) as $linha){
        
        if($linha['Id'] % 2 == 0)
        {
          echo "<tr><td></td>";
          echo "<td><a href=\"listavolumes.php?id={$linha['Id']}\">{$linha['Nome']}</a></td></tr>";  
        }
        else
        {
          echo "<tr><td style=\"background-color:#f1f1f1 !important\"></td>";
          echo "<td style=\"background-color:#f1f1f1 !important\"><a href=\"listavolumes.php?id={$linha['Id']}\">{$linha['Nome']}</a></td></tr>";
        }
        
      }
?>
     

    </table>
	
	<br>
  
		<input type="button" class="btn btn-default" value="Excluir" onClick="javascript: location.href='excluicolecao.php';" />
		<input name="button" type="button" class="btn btn-default" onClick="javascript: location.href='editarcolecao.php';" value="Editar" />
		<input name="button" type="button" class="btn btn-default"  onClick="javascript: location.href='cadastro.php';" value="Cadastrar" />
  </div>
	
	
  </body>
</html>
  