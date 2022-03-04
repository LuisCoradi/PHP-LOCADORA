<?php
include("conexao.php");
$idFilme = $_GET["idFilme"];
$sqlDeleta = mysqli_query($conexao,"delete from tbFilmes where idFilme = $idFilme")
or die("Erro ao deletar Arquivo.".
mysqli_error($conexao));
header('Location: lista-filmes.php');
?>
