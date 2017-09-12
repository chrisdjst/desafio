
<html lang="en">
	<head>
		<title>sem título</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php
			require('processa/conexao.php');
		?>
		<title>Página Inicial</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mask.min.js"></script>
		<script type="text/javascript">$(document).ready(function(){	$("#novocnpj").mask("99.999.999/9999-99");});</script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			.fundo{
				background-color:#eee;
			}
		</style>
	</head>

	<body class='fundo'>
		<?php
		$idempresas = $_GET["idempresas"];
		$pesquisa_empresas = "SELECT * FROM empresas WHERE status = '0' AND idempresas = '$idempresas';";
		$executa_pesquisa_empresas = mysqli_query($conexao, $pesquisa_empresas);
		while ($linha = mysqli_fetch_array($executa_pesquisa_empresas)){
			$razaosocial = $linha['razaosocial'];
			$nomefantasia = $linha['nomefantasia'];
			$site = $linha['site'];
			$cnpj = $linha['cnpj'];
			$ddd = $linha['ddd'];
			$telefone = $linha['telefone'];
			$numero = "$ddd $telefone";
		}
		echo"
		<div class='container-fluid'>
				<div class='row'>
					<br/>
					<div class='col-md-2'>
					</div>
					<div class='col-md-2'>
						<br/>
						<a href='index.php'><button type='button' class='btn btn-primary'>Voltar</button></a>
					</div>
					<div class='col-md-4'>
						<h1>$nomefantasia</h1>
					</div>
					<div class='col-md-4'>
					</div>
				</div>
				<form id='form' action='processa/alterar_empresa.php?idempresas=$idempresas' method='POST' enctype='multipart/form-data' autocomplete='on'>															
					<div class='row '>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<div class='form-group'>
								<label for='inputNovarazaosocial'>Nova razão social:</label>
								<div class='input-group'>
									<span class='input-group-addon'><label>?</label></span>
									<input type='text' class='form-control' id='inputNovarazaosocial' name='novarazaosocial' value='$razaosocial'>
								</div>
							</div>
						</div>
						<div class='col-md-2'>
						</div>
					</div>
					<div class='row '>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<div class='form-group'>
								<label for='inputNovonomefantasia'>Novo nome fantasia:</label>
								<div class='input-group'>
									<span class='input-group-addon'><label>?</label></span>
									<input type='text' class='form-control' id='inputNovonomefantasia' name='novonomefantasia' value='$nomefantasia'>
								</div>
							</div>
						</div>
						<div class='col-md-2'>
						</div>
					</div>
					<div class='row '>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<div class='form-group'>
								<label for='novocnpj'>Novo CNPJ:</label>
								<div class='input-group'>
									<span class='input-group-addon'><label>?</label></span>
									<input type='text' class='form-control' id='novocnpj' name='novocnpj' value='$cnpj' onkeypress='mascara(this, novocnpj)' maxlength='18'>
								</div>
							</div>
						</div>
						<div class='col-md-2'>
						</div>
					</div>
					<div class='row '>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<div class='form-group'>
								<label for='inputNovosite'>Novo site:</label>
								<div class='input-group'>
									<span class='input-group-addon'><label>?</label></span>
									<input type='text' class='form-control' id='inputNovosite' name='novosite' value='$site'>
								</div>
							</div>
						</div>
						<div class='col-md-2'>
						</div>
					</div>
					<div class='row '>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<div class='form-group'>
								<label for='novotelefone'>Novo telefone:</label>
								<div class='input-group'>
									<span class='input-group-addon'><label>?</label></span>
									<input type='text' class='form-control' id='novotelefone' name='novotelefone' value='$numero' pattern='\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}' maxlength='14'>
									<script type='text/javascript'>$('#novotelefone').mask('(99) 9999-99999');</script>
								</div>
							</div>
						</div>
						<div class='col-md-2'>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-2'>
						</div>
						<div class='col-md-8'>
							<button type='submit' class='btn btn-success ><span class='input-group-addon'><span class='glyphicon glyphicon-lock'></span> Salvar</span></button>
						</div>
						<div class='col-md-2'>
						</div>
					</div> 
				</form>";
				?>
				</div>
			</div>
		</div>
	</body>
</html>
