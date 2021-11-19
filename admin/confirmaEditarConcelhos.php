<?php
include_once ("includes/body.inc.php");
var_dump($_POST);
$sql="update concelhos set concelhoNome='".$_POST['nomeConcelho']."', concelhoDistritoId='".$_POST['idDistrito']."' where concelhoId='".$_POST['idConcelho']."'";
mysqli_query($con,$sql);
header("location:listaConcelhos.php");
?>
