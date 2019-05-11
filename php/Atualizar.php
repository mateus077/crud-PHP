<?php
include_once 'conexao.php';
$numer = $_POST['numero'];
$name= $_POST['nome'];
$sex = $_POST['sexo'];
$sql "UPDATE * FROM aluno SET nome = '$aluno' sexo = '$sex' WHERE '$number' = numero";
$r = mysqli_query($con, $sql);
if($r){
	echo "Atualização sucedida ";
}else{
	echo "Opa ocorreu um erro!";
}
?>