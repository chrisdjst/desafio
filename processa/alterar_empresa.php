<?php
require('conexao.php');
$idempresas = $_GET['idempresas'];
$novarazaosocial = $_POST['novarazaosocial'];
$novonomefantasia = $_POST['novonomefantasia'];
$novocnpj = $_POST['novocnpj'];
$numero = $_POST['novotelefone'];
$novoddd = mb_substr($numero, 0, 4);
$novotelefone = mb_substr($numero, -10);
if ($_POST['novosite'] == ''){
	$novosite = 'Sem site';
}
else{
	$novosite = $_POST['novosite'];
}
$pesquisa_razaosocial = "SELECT * FROM empresas WHERE razaosocial = '$novarazaosocial' AND idempresas <> '$idempresas';";
$executa_pesquisa_razaosocial = mysqli_query($conexao, $pesquisa_razaosocial);
$quantidade_de_linhas_razaosocial = mysqli_num_rows($executa_pesquisa_razaosocial);
	
$pesquisa_nomefantasia = "SELECT * FROM empresas WHERE nomefantasia = '$novonomefantasia' AND idempresas <> '$idempresas';";
$executa_pesquisa_nomefantasia = mysqli_query($conexao, $pesquisa_nomefantasia);
$quantidade_de_linhas_nomefantasia = mysqli_num_rows($executa_pesquisa_nomefantasia);

$pesquisa_cnpj = "SELECT * FROM empresas WHERE cnpj = '$novocnpj' AND idempresas <> '$idempresas';";
$executa_pesquisa_cnpj = mysqli_query($conexao, $pesquisa_cnpj);
$quantidade_de_linhas_cnpj = mysqli_num_rows($executa_pesquisa_cnpj);

$pesquisa_telefone = "SELECT * FROM empresas WHERE ddd = '$novoddd' AND telefone = '$novotelefone' AND idempresas <> '$idempresas'";
$executa_pesquisa_telefone = mysqli_query($conexao, $pesquisa_telefone);
$quantidade_de_linhas_telefone = mysqli_num_rows($executa_pesquisa_telefone);

if($quantidade_de_linhas_razaosocial == 1){
	header('location:../index.php?cod=2');
}
else{
	if($quantidade_de_linhas_nomefantasia == 1){
		header('location:../index.php?cod=3');
	}
	else{
		if($quantidade_de_linhas_cnpj == 1){
			header('location:../index.php?cod=4');
		}
		else{
			if($quantidade_de_linhas_telefone == 1){
				header('location:../index.php?cod=5');
			}
			else{
				if((preg_match('/^[a-z A-Z0-9ÇçãáàâêíúõéüÃÁÀÂÊÍÚÕÉÜ]+$/', $novarazaosocial))){
					if((preg_match('/^[a-z A-Z0-9ÇçãáàâêíúõéüÃÁÀÂÊÍÚÕÉÜ]+$/', $novonomefantasia))){
						$update = "UPDATE empresas set razaosocial = '$novarazaosocial', nomefantasia = '$novonomefantasia', site = '$novosite', cnpj = '$novocnpj', ddd = '$novoddd', telefone = '$novotelefone' WHERE idempresas = '$idempresas';";
						$excutar_update = mysqli_query($conexao,$update);
						header('location:../index.php?cod=1');
					}
					else{
							header('location:../index.php?cod=6');
					}
				}
				else{
						header('location:../index.php?cod=7');
				}
			}
		}
	}
}

?>
