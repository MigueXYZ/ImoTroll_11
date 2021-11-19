<?php
include_once ("includes/body.inc.php");
$sql="Insert into distritos values(0,'".$_POST['nomeDistrito']."')";
mysqli_query($con,$sql);
header("location:listaDistritos.php");
?>