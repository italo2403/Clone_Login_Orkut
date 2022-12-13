<?php

	include("conexao.php");
	
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	
	$sql="INSERT INTO cadastro(email, senha)
	VALUES ('$email', '$senha')";
	if(mysqli_query($conexao, $sql)){
		echo "Parabéns! Agora eu tenho os seus Dados!";
	}else{
		echo "Erro".mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>