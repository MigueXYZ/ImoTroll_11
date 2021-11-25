<?php
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);

$id=$_POST['id'];

$sql = "update imagens set imagemTipo = 'detalhe' where imagemTipo='principal' and imagemImovelId=".$id;
mysqli_query($con,$sql);

$n=$_POST['n'];

$sqlGen="update imagens set imagemtipo = 'principal' where imagemId=".$n;
mysqli_query($con,$sqlGen);
?>