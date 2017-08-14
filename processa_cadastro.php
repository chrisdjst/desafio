<?php
require('conexao.php');
$razaosocial = $_POST['razaosocial'];
$nomefantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$numero = $_POST['telefone'];
$ddd = mb_substr($numero, 0, 4);
$telefone = mb_substr($numero, -10);
$site = $_POST['site'];
if ($site == ''){
	$site = 'Sem site';
}
else{
	$site = $_POST['site'];
}
$pesquisa_razaosocial = "SELECT * FROM empresas WHERE razaosocial = '$razaosocial' AND status = '0';";
$executa_pesquisa_razaosocial = mysqli_query($conexao, $pesquisa_razaosocial);
$quantidade_de_linhas_razaosocial = mysqli_num_rows($executa_pesquisa_razaosocial);
	
$pesquisa_nomefantasia = "SELECT * FROM empresas WHERE nomefantasia = '$nomefantasia' AND status = '0';";
$executa_pesquisa_nomefantasia = mysqli_query($conexao, $pesquisa_nomefantasia);
$quantidade_de_linhas_nomefantasia = mysqli_num_rows($executa_pesquisa_nomefantasia);

$pesquisa_cnpj = "SELECT * FROM empresas WHERE cnpj = '$cnpj' AND status = '0';";
$executa_pesquisa_cnpj = mysqli_query($conexao, $pesquisa_cnpj);
$quantidade_de_linhas_cnpj = mysqli_num_rows($executa_pesquisa_cnpj);

$pesquisa_telefone = "SELECT * FROM empresas WHERE ddd = '$ddd' AND telefone = '$telefone' AND status = '0'";
$executa_pesquisa_telefone = mysqli_query($conexao, $pesquisa_telefone);
$quantidade_de_linhas_telefone = mysqli_num_rows($executa_pesquisa_telefone);

if($quantidade_de_linhas_razaosocial == 1){
	header('location:index.php?cod=2');
}
else{
	if($quantidade_de_linhas_nomefantasia == 1){
		header('location:index.php?cod=3');
	}
	else{
		if($quantidade_de_linhas_cnpj == 1){
			header('location:index.php?cod=4');
		}
		else{
			if($quantidade_de_linhas_telefone == 1){
				header('location:index.php?cod=5');
			}else{
				if((preg_match('/^[a-z A-Z0-9ÇçãáàâêíúõéüÃÁÀÂÊÍÚÕÉÜ]+$/', $razaosocial))){
					if((preg_match('/^[a-z A-Z0-9ÇçãáàâêíúõéüÃÁÀÂÊÍÚÕÉÜ]+$/', $nomefantasia))){
						$insert = "INSERT INTO empresas (razaosocial, nomefantasia, site, cnpj, ddd, telefone) 
							VALUES('$razaosocial', '$nomefantasia', '$site', '$cnpj', '$ddd', '$telefone');";
						$cadastro = mysqli_query($conexao,$insert);
						header('location:index.php?cod=1');
					}
					else{
							header('location:index.php?cod=6');
					}
				}
				else{
						header('location:index.php?cod=7');
				}
			}
		}
	}
}

?>
