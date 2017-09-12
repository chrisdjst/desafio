<?php
	$conexao = mysqli_connect("localhost", "root", "", "basedesafio");
	mysqli_set_charset($conexao, 'utf8');
	if ($conexao == false){
		$erro = mysqli_connect_error();
		echo("<h1>$erro</h1>");
	}
?>
