<?php
include_once("includes/body.inc.php");
$sql = "delete from imoveis where imovelId = '".$_POST['idImovel']."'";
mysqli_query($con, $sql);
header("location:listaImoveis.php");
?>