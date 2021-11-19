<?php
var_dump($_POST);
include_once ("includes/body.inc.php");
$sql="Insert into imagens values(0,'".$_POST['nomeConcelho']."',".$_POST['idDistrito'].")";
mysqli_query($con,$sql);
header("location:listaConcelhos.php");
?>