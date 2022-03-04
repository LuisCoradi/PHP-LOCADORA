<?php
include("conexao.php");
$idFilme = $_GET['idFilme'];
$sqlRegistros = mysqli_query($conexao."select tituloFilme,
duracaoFilme,
valorLocacao, tbFilmes.idCategoria,nomeCategoria from tbFilmes
 inner join tbCategorias 
 on tbFilmes.idCategoria = tbCategorias.idCategoria where 
 idFilme=$idFilme") or die ("Erro
 na exclusão da consulta" . mysqli_error($conexao));
 $dadaos = mysqli_fetch_array($sqlRegistros);
 $tituloFilme = $dados["tituloFilme"];
 $duracaoFilme = $dados["duracaoFilme"];
 $valorLocacao = $dados["valorLocacao"];
 $idCategoria = $dados["idCategoria"];
 $nomeCategoria = $dados["nomeCategoria"];
 ?>
