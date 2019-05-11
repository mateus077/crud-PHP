<!DOCTYPE html>
<html>
<head>
	<title>Alunos Atualizado</title>
	<meta charset="utf-8"/>
	<style type="text/css">sss
		a{
			text-decoration: none;	
		}
		#campo{
                position: relative;
                width: 700px;
                height: 600px;
                left: 50%;
                margin-left: -350px;
                padding-top: 30px;
                background: white;
                background-color: rgba(0,0,0,0.6);
                font-family:border-color: blue;
                border-radius: 10px;
                border: 3px gray solid;
		}
	</style>
</head>
<body>

				<?php include_once('conexao.php');?>
				<div id="campo">
				<table border="1px" align="center">
					<tr>
						<td colspan="5" align="center">Lista de Alunos</td>
					</tr>
				<tr>
					<td align="center">Número</td>
					<td align="center">Nome</td>
					<td align="center">Sexo</td>
					<td align="center">Excluir</td>
				</tr>
				<button><a href="index.php">Voltar</a></button>
						
			

	<?php
	include_once('conexao.php');
	@$excluir = $_GET['excluir'];

		$r = mysqli_query($con, "DELETE FROM alunos where numero = $excluir");
		if($r){
			echo "<script>location.href='listar.php';</script>";
		}

	$sql = "SELECT * FROM alunos";

	$r = mysqli_query($con, $sql);
	if($r){
		while ($result=mysqli_fetch_array($r)){?>
		<tr>
			<td><?php echo $result['numero'];?></td>
			<td><?php echo $result['nome'];?></td>
			<td><?php echo $result['sexo'];?></td>
			<td width="60px"><a href="?excluir=<?php  echo $dados['numero']; ?>" onclick="return confirm('Deseja Realmente Excluir?');">
		</tr>

			<?php
		}
	}
			?>
</table>


</div>
</body>
</html>