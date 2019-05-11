<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			vertical-align: baseline;
		}
		html body{
			background-color: blue;
		}
		body div{
			display: block;
			width: 30%;
			height: 123px;
			margin: 0 auto;
			border-color: 2px dashed black;
			margin-top: 300px;

		}
		
	</style>
</head>
<body>
	<div id="divCenter">
	<h1 align="center">cadastro</h1>
	<fieldset>
	<form method="POST" action="inserir.php">
     Número:<input type="text" name="numero" id="numero" size="3"/><br>
     Nome:<input type="text" name="nome" id="nome" size="50"/><br>
     Sexo : <input type="radio" id="sexo" value="M" name="sexo">M
     		<input type="radio" id="sexo" value="F" name="sexo">F
     
 
    <p><input type="submit" name="enviar" value="enviar"/></p>
	<button><a href="index.php">Voltar</a></button>
	</fieldset>
</div>
<?php
          include_once "conexao.php";
          if(isset($_POST['enviar'])){
              $numero = $_POST['numero'];
              $nome = $_POST['nome'];
              $sexo = $_POST['sexo'];
              mysqli_query($con,"INSERT INTO alunos (numero, nome, sexo)VALUES('$numero', '$nome', '$sexo')");
              mysqli_close($con);
          }
        ?>

</form>
</body>
</html>
