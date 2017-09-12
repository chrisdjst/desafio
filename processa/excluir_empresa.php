<?php 
require('conexao.php');

$idempresas = $_GET['idempresas'];

$excluir = "UPDATE empresas SET status = '1' WHERE idempresas = '$idempresas';";
$executa_excluir = mysqli_query($conexao, $excluir);

header('location:../index.php?cod=9');

?>
