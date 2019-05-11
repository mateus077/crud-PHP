<?php  
$host="localhost";
$nome="root";
$senha ="usbw";
$banco = "escolas";

$con = mysqli_connect($host,$nome,$senha,$banco);
if($con){
	echo "Conectado com sucesso";
}else{
	echo "Erro ao conectar";
} 

?>