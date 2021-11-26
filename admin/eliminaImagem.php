<?php

$idImovel = intval($_POST['id']);
$idImagem = intval($_POST['n']);
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);

$sql="select * from imagens where imagemId=".$idImagem;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);


unlink("../".$dados['imagemCaminhoURL']);




$sqlGen = "delete from imagens where imagemid=".$idImagem;
mysqli_query($con,$sqlGen);
?>

