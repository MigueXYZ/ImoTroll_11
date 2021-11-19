<?php
include_once ("includes/body.inc.php");

$sql="Insert into `imoveltipos`(`imovelTipoNome`, `imovelTipoGenero`) values('".$_POST['nomeTipo']."','".$_POST['generoTipo']."')";
mysqli_query($con,$sql);
header("location:listaTipos.php");

?>

