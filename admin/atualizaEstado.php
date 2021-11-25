<?php
$idImovel=intval($_POST['id']);
$idImagem=intval($_POST['n']);
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);



$sql = "update imagens set imagemTipo = 'detalhe' where  imagemImovelId=".$idImovel;
mysqli_query($con,$sql);



$sqlGen="update imagens set imagemtipo = 'principal' where imagemId=".$idImagem;
mysqli_query($con,$sqlGen);
?>