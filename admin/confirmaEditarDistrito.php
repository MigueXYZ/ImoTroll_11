<?php
include_once ("includes/body.inc.php");
var_dump($_POST);
$sql="update distritos set distritoNome='".$_POST['nomeDistrito']."' where distritoId = '".$_POST['distritoId']."'";
mysqli_query($con,$sql);
header("location:listaDistritos.php");
?>