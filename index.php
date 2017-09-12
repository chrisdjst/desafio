<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php
			require('processa/conexao.php');
		?>
		<title>Página Inicial</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.mask.min.js"></script>
		<script type="text/javascript">$(document).ready(function(){	$("#cnpj").mask("99.999.999/9999-99");});</script>
		<script type="text/javascript">$(document).ready(function(){	$("#novocnpj").mask("99.999.999/9999-99");});</script>
		<script src="js/bootstrap.min.js"></script>
		<style>
			div.auto {
				width: 587px;
				height: 198px;
				overflow: auto;
			}
			div.scroll {
				width: 100%;
				height: 450px;
				overflow: auto;
			}
			hr{
				height:1px;
				background-color:#949494;
			}
			.fundo{
				background-color:#eee;
			}
		</style>
	</head>

	<body class='fundo'>
		<div class='container-fluid'>
			<div class='row'>
				<form action='processa/cadastro_empresa.php' method='POST' autocomplete='on'>
					<div class='col-md-2'>
					</div>
					<div class='col-md-8'>
						<div class='col-md-12'>
							<h3><label>Cadastro de empresas</label></h3>
						</div>
						<div class='col-md-12'>
							
							<div class='col-md-6'>
								<div class='form-group'>
									<h4><label for='inputRazaoSocial'>Razão Social:</label></h4>
									<div class='input-group'>
										<a class='btn input-group-addon'  data-toggle='collapse' href='#razaosocial' aria-expanded='false' aria-controls='razaosocial'>
											?
										</a>
										<input type='text' class='form-control' id='inputRazaoSocial' name='razaosocial' placeholder='Razão Social' maxlength='200'>
									</div>
								</div>
								<div class='collapse' id='razaosocial'>
									<h5>Razão social é o nome devidamente registrado sob o qual uma pessoa jurídica se individualiza e exerce suas atividades.</h5>
									<a href='https://pt.wikipedia.org/wiki/Raz%C3%A3o_social'>ir para wikipédia</a>
								</div>
							</div>
							<div class='col-md-6'>
								<div class='form-group'>
									<h4><label for='inputNomeFantasia'>Nome Fantasia:</label></h4>
									<div class='input-group'>
										<a class='btn input-group-addon'  data-toggle='collapse' href='#nomefantasia' aria-expanded='false' aria-controls='nomefantasia'>
											?
										</a>
										<input type='text' class='form-control' id='inputNomeFantasia' name='nomefantasia' placeholder='Nome Fantasia' maxlength='200'>
									</div>
								</div>
								<div class='collapse' id='nomefantasia'>
									<h5>Nome fantasia é a designação popular de título de estabelecimento utilizada por uma instituição (empresa, associação etc), seja pública ou privada, sob o qual ela se torna conhecida do público.</h5>
									<a href='https://pt.wikipedia.org/wiki/Nome_fantasia'>ir para wikipédia</a>
								</div>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='col-md-4'>
								<div class='form-group'>
									<h4><label for='cnpj'>CNPJ:</label></h4>
									<div class='input-group'>
										<a class='btn input-group-addon'  data-toggle='collapse' href='#cnpjcollapse' aria-expanded='false' aria-controls='cnpjcollapse'>
											?
										</a>
										<input type='text' class='form-control' id='cnpj' name='cnpj' placeholder='CNPJ' onkeypress='mascara(this, cnpj)' maxlength='18'>
									</div>
								</div>
								<div class='collapse' id='cnpjcollapse'>
									<h5>O Cadastro Nacional da Pessoa Jurídica (acrônimo: CNPJ) é um número único que identifica uma pessoa jurídica e outros tipos de arranjo jurídico sem personalidade jurídica (como condomínios, orgãos públicos, fundos) junto à Receita Federal brasileira (órgão do Ministério da Fazenda).</h5>
									<a href='https://pt.wikipedia.org/wiki/Cadastro_Nacional_da_Pessoa_Jur%C3%ADdica'>ir para wikipédia</a>
								</div>
							</div>
							<div class='col-md-4'>
								<div class='form-group'>
									<h4><label for='txttelefone'>Telefone:</label></h4>
									<div class='input-group'>
										<span class='input-group-addon'><span class='glyphicon'><label>?</label></span></span>
										<input type='text' class='form-control' id='txttelefone' name='telefone' pattern='\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}' placeholder='Telefone' maxlength='14'>
										<script type='text/javascript'>$('#txttelefone').mask('(99) 9999-99999');</script>
									</div>
								</div>
							</div>
							<div class='col-md-4'>
								<div class='form-group'>
									<h4><label for='inputSite'>Site:</label></h4>
									<div class='input-group'>
										<span class='input-group-addon'><span class='glyphicon'><label>?</label></span></span>
										<input type='text' class='form-control' id='inputSite' name='site' placeholder='Site (Opcional)' maxlength='200'>
									</div>
								</div>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='col-md-4'>
								<button type='submit' class='btn btn-primary'>Cadastrar</button>
							</div>
							<div class='col-md-9'>
							</div>
						</div>
					</div>
					<div class='col-md-2'>
					</div>
				</div>
			</form>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-8'>
					<hr>
					<div class='col-md-12'>
						<div class='col-md-6'>
							<h3><label>Lista de empresas cadastradas</label></h3>
						</div>
						<div class='col-md-6'>
							<form class='navbar-form'method='GET' action='pesquisa.php' role='search'>
								<div class='form-group'>
									<input type='text' class='form-control' name='pesquisa' placeholder='Pesquisar empresas'>
									<button type='submit' class='btn btn-primary' aria-label='Left Align'>
										<span class='glyphicon glyphicon-search' aria-hidden='true'></span>    
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class='col-md-12'>
						 
						<div class='scroll'>
							<?php
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
								$pesquisa_empresas = "SELECT * FROM empresas WHERE status = '0' ORDER BY nomefantasia ASC;";
								$executa_pesquisa_empresas = mysqli_query($conexao, $pesquisa_empresas);
								while ($linha = mysqli_fetch_array($executa_pesquisa_empresas)){
								$idempresas = $linha['idempresas'];
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
							?>
							</table>
						</div>
					</div>
				</div>
				<div class='col-md-2'>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	if(isset($_GET["cod"])){
		$cod = $_GET["cod"];
		switch ($cod) {
		case 1:
			echo"									
			<script>
				alert('Cadastro salvo com sucesso! ')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 2:
			echo"
			<script>
				alert('Razão social já cadastrada!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 3:
			echo"
			<script>
				alert('<Nome fantasia já cadastrado!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 4:
			echo"
			<script>
				alert('CNPJ já cadastrado!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 5:
			echo"
			<script>
				alert('Telefone já cadastrado!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 6:
			echo"
			<script>
				alert('CNPJ inválido!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 7:
			echo"
			<script>
				alert('Não é permitido o uso de caracteres especiais no nome fantasia!')
				window.location='index.php?cod=0'
			</script>";
			break;
		case 8:
			echo"
			<script>
				alert('Não é permitido o uso de caracteres especiais na razão social!')
				window.location='index.php?cod=0'
			</script>";
			break;
		}
	}
?>
