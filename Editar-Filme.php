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
 <!doctype html>
 <html>
     <head><meta charset="utf-8">
     <title>Gerencia Registro </title>
     </head>
     <body>
         <h1>Locadora IFPR</h1>
<?php
include("Menu.php");
?>
<form name="form1" action="Atualizar-Filme.php?" method="post">
     <input type="hidden" name="idFilme" value="<?php echo $idFilme;?>">
     <p>
     <label>Titulo:</label>
     <input type="text" name="tituloFilme" value="<?php echo $tituloFilme; ?>">
     </p>
     <p>
     <label>Duração:</label>
     <input type="text" name="duracaoFilme" value="<?php echo $duracaoFilme; ?>">
     </p>
     <p>
     <label>Valor:</label>
     <input type="text" name="valorLocacao" value="<?php echo $valorLocacao;?>">
    </p>
