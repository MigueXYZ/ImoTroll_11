<?php

$idImovel=intval($_POST['n']);
include_once("includes/config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);



$sql = "update imoveis set imovelDestaque = 'nao'";
mysqli_query($con,$sql);

$sqlGen="update imoveis set imovelDestaque = 'destaque' where imovelId=".$idImovel;
mysqli_query($con,$sqlGen);
?>