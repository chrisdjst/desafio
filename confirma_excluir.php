<html>

	<head>
		<title>Confirma excluir</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
			.fundo{
				background-color:#eee;
			}
		</style>
	</head>

	<body class='fundo'>
		<?php
		require('processa/conexao.php');
		$idempresas = $_GET['idempresas'];
		$pesquisa_empresas = "SELECT nomefantasia FROM empresas WHERE idempresas = '$idempresas';";
		$executa_pesquisa_empresas = mysqli_query($conexao, $pesquisa_empresas);
		$linha = mysqli_fetch_array($executa_pesquisa_empresas);
		$nomefantasia = $linha['nomefantasia'];
		echo"
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-8'>
					<br/>
					<h2><label>Você realmente deseja excluir a empresa de nome fantasia igual à <i>'$nomefantasia'</i>?</label></h2>
				</div>
				<div class='col-md-2'>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-8'>
					<div class='col-md-2'>
					</div>
					<div class='col-md-5'>
						<a href='processa/excluir_empresa.php?idempresas=$idempresas'><button type='button' class='btn btn-success'><h3>Sim!</h3></button></a>
					</div>
					<div class='col-md-3'>
						<a href='index.php'><button type='button' class='btn btn-danger'><h3>Não!</h3></button></a>
					</div>
					<div class='col-md-2'>
					</div>
				</div>
				<div class='col-md-2'>
				</div>
			</div>
		</div>";
		?>
	</body>
</html>
