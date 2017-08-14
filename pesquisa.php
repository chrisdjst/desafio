<html>

	<head>
		<title>Pesquisa</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
			div.auto {
				width: 587px;
				height: 198px;
				overflow: auto;
			}
			div.scroll {
				height: 820px;
				overflow: auto;
			}
			.fundo{
					background-color:#eee;
				}
		</style>
	</head>

	<body class='fundo'>
		<?php
		require('conexao.php');
		$pesquisa = $_GET['pesquisa'];
		echo"
		
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-2'>
					<br/>
					<a href='index.php'><button type='button' class='btn btn-primary'>Voltar</button></a>
				</div>
				<div class='col-md-4'>
					<h3><label>Resultado para pesquisa '<i>$pesquisa</i>':</label></h3>
				</div>
				<div class='col-md-4'>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-8 scroll'>";
					$tamanho = strlen($pesquisa);
					if(((!preg_match('/^[()-]+$/', $pesquisa)) == 1) and ($tamanho == 14 or $tamanho == 15)){
						$ddd = mb_substr($pesquisa, 0, 4);
						$telefone = mb_substr($pesquisa, -10);
						$pesquisa_empresa = "SELECT idempresas FROM empresas WHERE ddd = '$ddd' AND telefone = '$telefone' AND status = '0';";
					}
					elseif((((!preg_match('/^[-]+$/', $pesquisa)) == 1) and ($tamanho == 10 or $tamanho == 9))){
						$pesquisa_empresa = "SELECT idempresas FROM empresas WHERE telefone = '$pesquisa' AND status = '0';";
						}
					else{
						$pesquisa_empresa = "SELECT idempresas FROM empresas WHERE (razaosocial LIKE '%$pesquisa%' OR nomefantasia LIKE '%$pesquisa%' OR site LIKE '%$pesquisa%' OR cnpj LIKE '%$pesquisa%') AND status = '0';";
					}
					$executa_pesquisa_empresa = mysqli_query($conexao, $pesquisa_empresa);
					echo"
					<table class='table table-striped table-responsive table-bordered'>
						<thead>
							<tr>
								<th>
									Ordem:
								</th>
								<th>
									Nome Fantasia:
								</th>
								<th>
									Razão Social:
								</th>
								<th>
									CNPJ:
								</th>
								<th>
									Site:
								</th>
								<th>
									Telefone:
								</th>
								<th>
									Opções:
								</th>
							</tr>
						</thead>
						";
						$contador = 0;
						while($linha = mysqli_fetch_array($executa_pesquisa_empresa)){
							$idempresas = $linha['idempresas'];
						
							
							$pesquisa_empresas = "SELECT * FROM empresas WHERE idempresas = '$idempresas' AND status = '0' ORDER BY nomefantasia ASC;";
							$executa_pesquisa_empresas = mysqli_query($conexao, $pesquisa_empresas);
							while ($linha = mysqli_fetch_array($executa_pesquisa_empresas)){
								$razaosocial = $linha['razaosocial'];
								$nomefantasia = $linha['nomefantasia'];
								$site = $linha['site'];
								$cnpj = $linha['cnpj'];
								$ddd = $linha['ddd'];
								$telefone = $linha['telefone'];
								$numero = "$ddd $telefone";
								$contador = $contador + 1;	
						   
						echo"
						<tbody>
							<tr>
								<th>
									$contador
								</th>
								<td>
									$nomefantasia
								</td>
								<td>
									$razaosocial
								</td>
								<td>
									$cnpj
								</td>
								<td>
									$site
								</td>
								<td>
									$numero
								</td>
								<td>
									<a href='editar_empresa.php?idempresas=$idempresas'><button type='button' class='btn btn-warning'>Editar</button></a>
									<a href='confirma_excluir.php?idempresas=$idempresas'><button type='button' class='btn btn-danger'>Excluir</button></a>
								</td>
							</tr>
						</tbody>
						";
						
							}
						}	
					?>
					</table>
				</div>
				<div class='col-md-2'>
				</div>
			</div>
		</div>
	</body>
</html>
