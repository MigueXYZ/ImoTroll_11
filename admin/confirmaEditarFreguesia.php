<?php
include_once ("includes/body.inc.php");
var_dump($_POST);
$sql="update freguesias set freguesiaNome='".$_POST['nomeFreguesia']."', freguesiaConcelhoId='".$_POST['idConcelho']."' where freguesiaId='".$_POST['idFreguesia']."'";
mysqli_query($con,$sql);
header("location:listaFreguesias.php");
?>
